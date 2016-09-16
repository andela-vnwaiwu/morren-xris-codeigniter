<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

  public function index() {

    // loads the model class for retrieving the list of images from the dstabase
    // TRUE enables the connection to the database
    $this->load->model('gallery_model', '', TRUE);
    $data['query'] = $this->gallery_model->get_all_images();

    // Capitalize the first letter of the page title
    $data['title'] = ucfirst('Gallery'); 

    // loads the helper function for url routing in the header
    $this->load->helper('url');

    // Loads the templates for rendering
    $this->load->view('templates/header', $data);
    $this->load->view('pages/gallery', $data);
    $this->load->view('templates/footer');
  }

}