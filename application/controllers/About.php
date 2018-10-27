<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends FrontendController {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin/articleposition_model', '', TRUE);
    $this->load->model('admin/article_model', '', TRUE);
  }

  public function index() {
    // get the article that has ben assigned various positio on the home page
    $about = $this->articleposition_model->get_position_name('about-us');
    $about_article = $about->id;

    $data['query'] = $this->article_model->get_active_article($about_article);

    $data['title'] = ucfirst('about Us'); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/about');
    $this->load->view('templates/footer');
  }

}