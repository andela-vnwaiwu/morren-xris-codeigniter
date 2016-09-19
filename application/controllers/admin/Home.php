<?php

  /**
   * 
   */
  class Home extends BackendController {
    
    public function __construct() {
      parent::__construct();
    }

    public function index() {
      parent::checkLoginStatus();

      $data['title'] = 'Admin';

      $this->load->helper('url');
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/upload');
      $this->load->view('admin/templates/footer'); 
      
    }

  }
  