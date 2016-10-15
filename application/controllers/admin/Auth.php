<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends BackendController {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	public function index() {
		$check_user = parent::checkLoginStatus();
    if ($check_user == TRUE) {
      redirect('admin/');
    } else {
      $data['title'] = 'Admin Login';
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/auth');
      $this->load->view('admin/templates/footer');
    }
	}
	// 	checks if the admin details are correct from the database'
  public function login() {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $this->users_model->get_user($email, $password);
    if (count($user) == 1) {
      $user_info = array(
        'firstname'  => $user[0]->firstname,
        'email'     => $user[0]->email,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($user_info);
      redirect('admin/');
    } else {
      redirect('admin/auth');
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('admin/auth');
  }
}