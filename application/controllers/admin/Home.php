<?php

  /**
   * 
   */
  class Home extends BackendController {
    
    public function __construct() {
      parent::__construct();
      if(! parent::checkLoginStatus()) {
        redirect('admin/auth');
      }
    }

    public function index() {
      $data['user'] = parent::checkLoginStatus();
      $data['title'] = ucfirst('dashboard');
      $this->load->helper('url');
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/dashboard');
      $this->load->view('admin/templates/footer');
    }

  }
  