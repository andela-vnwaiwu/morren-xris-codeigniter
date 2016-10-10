<?php

  /**
   * 
   */
  class Home extends BackendController {
    
    public function __construct() {
      parent::__construct();
    }

    public function index() {
      $check_user = parent::checkLoginStatus();
      if($check_user == TRUE) {
        $data['title'] = 'Admin';

        $this->load->helper('url');
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/upload');
        $this->load->view('admin/templates/footer'); 
      } else {
        redirect('admin/auth');
      }

      
    }

  }
  