<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends FrontendController {

  public function __construct() {
    parent::__construct();
    $this->load->model('admin/articleposition_model', '', TRUE);
    $this->load->model('admin/article_model', '', TRUE);
  }

  public function index() {
    // get the article that has ben assigned various positio on the home page
    // Thinking of refactoring this code soon... DRY CODE
    $homepage1 = $this->articleposition_model->get_position_name('Home Page 1');
    $homepage2 = $this->articleposition_model->get_position_name('Home Page 2');
    $first_article = $homepage1->id;
    $second_article = $homepage2->id;

    $data['query1'] = $this->article_model->get_active_article($first_article);
    $data['query2'] = $this->article_model->get_active_article($second_article);


    $data['title'] = ucfirst('home'); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/home');
    $this->load->view('templates/footer');
  }

}