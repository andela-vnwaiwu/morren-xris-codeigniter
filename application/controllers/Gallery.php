<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends FrontendController {

  public function index() {

    // loads the model class for retrieving the list of images from the dstabase
    // TRUE enables the connection to the database
    $this->load->model('gallery_model', '', TRUE);
    // loads the helper function for url routing in the header
    $this->load->helper('url');
    $data['query'] = $this->gallery_model->get_active_category();

    // Capitalize the first letter of the page title
    $data['title'] = ucfirst('Gallery'); 

    // Loads the templates for rendering
    $this->load->view('templates/header', $data);
    $this->load->view('pages/gallery', $data);
    $this->load->view('templates/footer');
  }

}