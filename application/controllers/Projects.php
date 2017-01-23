<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
    $page_data = array(
      'title' => "Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "site_page" => "highlights",
      "page_title" => "Side projects"
    );

    $this->load->view('templates/header', $page_data);
		$this->load->view('projects/index');
    $this->load->view('templates/footer');
	}

  public function govuk_infoscreens()
  {
    $page_data = array(
      'title' => "GOV.UK Infoscreens - Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "page_title" => "Project: GOV.UK Infoscreens"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/govuk_infoscreens');
    $this->load->view('templates/footer');
  }

  public function spending_tweets()
  {
    $page_data = array(
      'title' => "Spending Tweets - Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "page_title" => "Project: Spending Tweets"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/spending_tweets');
    $this->load->view('templates/footer');
  }

  public function whattheyclaimed()
  {
    $page_data = array(
      'title' => "WhatTheyClaimed - Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "page_title" => "Project: WhatTheyClaimed"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/whattheyclaimed');
    $this->load->view('templates/footer');
  }

  public function cllrtweeps()
  {
    $page_data = array(
      'title' => "CllrTweeps - Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "page_title" => "Project: CllrTweeps"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/cllrtweeps');
    $this->load->view('templates/footer');
  }

  public function waterfront()
  {
    $page_data = array(
      'title' => "Waterfront - Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "page_title" => "Project: Waterfront"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/waterfront');
    $this->load->view('templates/footer');
  }

  public function food_for_thought()
  {
    $page_data = array(
      'title' => "Food for Thought (Young Rewired State 2011) - Side projects - " . SITE_NAME,
      "site_section" => "projects",
      "page_title" => "Project: Food for Thought"
    );

    $this->load->view('templates/header', $page_data);
    $this->load->view('projects/foodforthought');
    $this->load->view('templates/footer');
  }
}
