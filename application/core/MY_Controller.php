<?php
  /**
   * 
   */

  defined('BASEPATH') OR exit('No direct script access allowed'); 

  class MY_Controller extends CI_Controller {

    public function __construct() {
      parent::__construct();
    }
  }
  

  class FrontendController extends MY_Controller {

    public function __construct() {
      parent::__construct();
    }
  }

  class BackendController extends MY_Controller {

    public function __construct() {
      parent::__construct();

      $this->load->library('session');
      $this->load->model('admin/users_model', '', TRUE);
    }

    //redirect user to login page if not logged in
    protected function checkLoginStatus() {
      if ($this->session->has_userdata('firstname')) {
        $email = $this->session->userdata('email');
        $user = $this->users_model->user_info($email);
        return $user; 
      } 
    }

    static function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      // $data = htmlspecialchars($data);
      return $data;
    }
  }