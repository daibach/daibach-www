<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

  public function gone() {
    $this->load->view('errors/html/error_410.php');
  }

}
