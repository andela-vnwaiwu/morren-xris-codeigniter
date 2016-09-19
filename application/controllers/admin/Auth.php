<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index() {
    parent::checkLoginStatus();
  }
  // checks if the admin details are correct from the database'
  public function check_auth() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $this->users_model->get_user($username, $password);
    if (count($user) == 1){
      $user_info = array(
        'username'  => $user[0]->username,
        'email'     => $user[0]->email,
        'logged_in' => TRUE
      );

      $this->session->set_userdata($user_info);

      $this->load->view('admin/templates/header');
      $this->load->view('admin/pages/upload');
      $this->load->view('admin/templates/footer');
    } else {

      $this->load->view('admin/templates/header');
      $this->load->view('admin/pages/auth');
      $this->load->view('admin/templates/footer');
    }
    
  }

  public function logout() {

    $this->session->sess_destroy();

    $this->load->view('admin/templates/header');
    $this->load->view('admin/pages/auth');
    $this->load->view('admin/templates/footer');
  }

}