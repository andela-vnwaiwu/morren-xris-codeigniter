<?php

  /**
   * 
   */
  class Home extends BackendController {
    
    public function __construct() {
      parent::__construct();
    }

    public function index() {

      $this->checkLoginStatus();
      $data['title'] = 'Admin';

      $this->load->helper('url');
      $this->load->view('templates/header', $data);
      $this->load->view('pages/contact');
      $this->load->view('templates/footer');
    }

    // redirect user to login page if not logged in
    protected function checkLoginStatus() {

      $user = $this->users_model->get_user();
      if (!$this->session->userdata()) {
        redirect('login');
      }
    }
  }
  