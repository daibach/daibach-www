<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
    $page_data = array(
      'title' => "My Projects - " . SITE_NAME,
      "site_section" => "projects",
      "site_page" => "highlights"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('projects/index');
    $this->load->view('templates/footer');
	}

  public function the_rest()
  {
    $page_data = array(
      'title' => "My Projects (The Rest) - " . SITE_NAME,
      "site_section" => "projects",
      "site_page" => "the-rest"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/the_rest');
    $this->load->view('templates/footer');
  }

  public function govuk_infoscreens()
  {
    $page_data = array(
      'title' => "GOV.UK Infoscreens - My Projects - " . SITE_NAME,
      "site_section" => "projects"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/govuk_infoscreens');
    $this->load->view('templates/footer');
  }

  public function spending_tweets()
  {
    $page_data = array(
      'title' => "Spending Tweets - My Projects - " . SITE_NAME,
      "site_section" => "projects"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/spending_tweets');
    $this->load->view('templates/footer');
  }

  public function whattheyclaimed()
  {
    $page_data = array(
      'title' => "WhatTheyClaimed - My Projects - " . SITE_NAME,
      "site_section" => "projects"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/whattheyclaimed');
    $this->load->view('templates/footer');
  }

  public function cllrtweeps()
  {
    $page_data = array(
      'title' => "CllrTweeps - My Projects - " . SITE_NAME,
      "site_section" => "projects"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/cllrtweeps');
    $this->load->view('templates/footer');
  }

  public function waterfront()
  {
    $page_data = array(
      'title' => "Waterfront - My Projects - " . SITE_NAME,
      "site_section" => "projects"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/waterfront');
    $this->load->view('templates/footer');
  }

  public function food_for_thought()
  {
    $page_data = array(
      'title' => "Food for Thought (Young Rewired State 2011) - My Projects - " . SITE_NAME,
      "site_section" => "projects"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/foodforthought');
    $this->load->view('templates/footer');
  }
}
