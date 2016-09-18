<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index() {

    $data['title'] = ucfirst('Login'); // Capitalize the first letter

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/auth', array('error' => ' ' ));
    $this->load->view('admin/templates/footer');
  }


}