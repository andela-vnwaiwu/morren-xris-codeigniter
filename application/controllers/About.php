<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

  public function index() {

    $data['title'] = ucfirst('about Us'); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/about');
    $this->load->view('templates/footer');
  }

}