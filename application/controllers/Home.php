<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index() {

    $data['title'] = ucfirst('home'); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/home');
    $this->load->view('templates/footer');
  }

}