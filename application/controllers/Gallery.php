<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

  public function index() {

    $this->load->model('gallery_model', '', TRUE);
    $data['query'] = $this->gallery_model->get_all_images();

    $data['title'] = ucfirst('Gallery'); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/gallery', $data);
    $this->load->view('templates/footer');
  }

}