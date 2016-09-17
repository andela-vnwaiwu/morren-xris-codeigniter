<?php

  /**
   * 
   */
  class Home extends BackendController {
    
    function __construct() {
      parent::__construct();
    }

    public function index() {

      $data['title'] = 'Admin';

      $this->load->helper('url');
      $this->load->view('templates/header', $data);
      $this->load->view('pages/contact');
      $this->load->view('templates/footer');
    }
  }
  