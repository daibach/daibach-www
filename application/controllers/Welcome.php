<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

    $page_data = array(
      'title' => SITE_NAME . " - web developer and tech arch",
      'meta_description' => "Dafydd Vaughan - web developer and tech arch. I build stuff for the web at the Government Digital Service",
      "site_section" => "home",
      "page_title" => "Hello, I'm Dafydd Vaughan"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('welcome');
    $this->load->view('templates/footer');
	}

  public function profile()
  {
    $page_data = array(
      'title' => "About me - " . SITE_NAME,
      "site_section" => "about",
      "site_page" => "profile",
      "page_title" => "About me"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('profile');
    $this->load->view('templates/footer');
  }

  public function more()
  {
    $page_data = array(
      'title' => SITE_NAME . ' around the web',
      "site_section" => "about",
      "site_page" => "more-me",
      "page_title" => "Find me online"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('more');
    $this->load->view('templates/footer');
  }

  public function contact()
  {
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

  public function blogs()
  {
    $page_data = array(
      'title' => "Things I've Written - " . SITE_NAME,
      "site_section" => "about",
      "site_page" => "writings",
      "page_title" => "Things I've written"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('blogs');
    $this->load->view('templates/footer');
  }

  public function privacy()
  {
    $page_data = array(
      'title' => "Privacy &amp; cookies on this site - " . SITE_NAME,
      "site_section" => "privacy",
      "site_page" => "privacy",
      "page_title" => "Privacy &amp; cookies"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('privacy');
    $this->load->view('templates/footer');
  }

  public function cookies()
  {
    $page_data = array(
      'title' => "The cookies - privacy &amp; cookies on this site - " . SITE_NAME,
      "site_section" => "privacy",
      "site_page" => "cookies",
      "page_title" => "Cookies"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('cookies');
    $this->load->view('templates/footer');
  }
}
