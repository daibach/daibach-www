<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

  public function index()
  {
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
}
