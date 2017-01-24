<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function index()
  {
    $this->_show_form();

  }

  public function send()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<li>', '</li>');
    $this->form_validation->set_rules($this->_contact_validation_rules());

    if ($this->form_validation->run() == FALSE) {
      $this->_show_form();
    } else {
      if($this->_process_form()) {
        $this->_show_success();
      } else {
        $this->_show_form(array('sending_failed'=>TRUE));
      }
    }
  }

  private function _show_form($extra_data = NULL) {
    $this->load->helper('form');
    $page_data = array(
      'title' => "Contact Me - " . SITE_NAME,
      "site_section" => "contact",
      "site_page" => "contact",
      "page_title" => "Contact me"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('contact',$extra_data);
    $this->load->view('templates/footer');
  }

  private function _show_success() {
    $page_data = array(
      'title' => "Message Sent - Contact Me - " . SITE_NAME,
      "site_section" => "contact",
      "site_page" => "contact",
      "page_title" => "Contact me"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('contact-sent');
    $this->load->view('templates/footer');
  }

  private function _contact_validation_rules() {
    $config = array(
      array(
        'field' => 'txtName',
        'label' => 'name',
        'rules' => 'trim|required',
        'errors' => array(
          'required' => 'You must provide a %s'
        )
      ),
      array(
        'field' => 'txtEmail',
        'label' => 'email address',
        'rules' => 'trim|required|valid_email',
        'errors' => array(
          'required'    => 'You must provide an %s',
          'valid_email' => 'You must provide a valid %s'
        )
      ),
      array(
        'field' => 'txtMessage',
        'label' => 'message',
        'rules' => 'trim|required',
        'errors' => array(
          'required'    => 'You must provide a %s'
        )
      ),
      array(
        'field' => 'txtValid',
        'label' => 'spam checker',
        'rules' => 'trim|exact_length[0]',
        'errors' => array(
          'exact_length'    => 'You must not put anything in the %s field'
        )
      )
    );
    return $config;
  }

  private function _process_form() {
    $referrer=$xforward=$ua = "";
    $name = $this->input->post('txtName');
    $email = $this->input->post('txtEmail');
    $message = $this->input->post('txtMessage');
    $ip = $_SERVER['REMOTE_ADDR'];
    if(isset($_SERVER['HTTP_REFERER']))         { $referrer = $_SERVER['HTTP_REFERER']; }
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) { $xforward = $_SERVER['HTTP_X_FORWARDED_FOR']; }
    if(isset($_SERVER['HTTP_USER_AGENT']))      { $ua       = $_SERVER['HTTP_USER_AGENT']; }
    return $this->_submit_contact($name,$email,$message,$referrer,$ip,$xforward,$ua);
  }

  private function _submit_contact($name,$email,$message,$referrer,$ip,$xforward,$ua) {
    $params = http_build_query(array(
      'site'      => CONTACT_API_CODE,
      'key'       => CONTACT_API_KEY,
      'name'      => $name,
      'email'     => $email,
      'message'   => $message,
      'source'    => current_url(),
      'referrer'  => $referrer,
      'ip'        => $ip,
      'xforward'  => $xforward,
      'ua'        => $ua
    ));

    $useragent = CONTACT_API_UA;
    $url = CONTACT_API_ENDPOINT;

    $ch = curl_init();
    curl_setopt_array($ch, array(
      CURLOPT_HEADER => FALSE,
      CURLOPT_RETURNTRANSFER => TRUE,
      CURLOPT_FAILONERROR => TRUE,
      CURLOPT_COOKIESESSION => TRUE,
      CURLOPT_FOLLOWLOCATION => TRUE,
      CURLOPT_COOKIEJAR => "/dev/null",
      CURLOPT_CONNECTTIMEOUT => 14,
      CURLOPT_TIMEOUT => 21,
      CURLOPT_POST => TRUE,
      CURLOPT_POSTFIELDS => $params,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_USERAGENT => $useragent,
      CURLOPT_URL => $url));

    $response = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($http_status===200) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

}
