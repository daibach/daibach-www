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
      $this->_show_success();
    }
  }

  private function _show_form() {
    $this->load->helper('form');
    $page_data = array(
      'title' => "Contact Me - " . SITE_NAME,
      "site_section" => "contact",
      "site_page" => "contact",
      "page_title" => "Contact me"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('contact');
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

}
