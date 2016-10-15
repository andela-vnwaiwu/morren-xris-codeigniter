<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('admin/articleposition_model', '', TRUE);
    $this->load->model('admin/article_model', '', TRUE);
    $this->load->library('form_validation');
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('position', 'position', 'required');
    $this->form_validation->set_rules('content', 'content', 'required');
    if(! parent::checkLoginStatus()) {
      redirect('admin/auth');
    }
  }

  public function index() {
    $data['title'] = ucfirst('Create Article'); // Capitalize the first letter
    $data['positions'] = $this->articleposition_model->get_all_positions();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/article', $data);
    $this->load->view('admin/templates/footer');
  }

  public function save_article() {
    $data['title'] = 'Saving Article';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if($this->form_validation->run() == FALSE) {
        $data['message'] = 'You did not fill the form correctly';
        $data['positions'] = $this->articleposition_model->get_all_positions();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/article', $data);
        $this->load->view('admin/templates/footer');
      } else {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $positionid = $this->input->post('position');
        $user = parent::checkLoginStatus();
        $userid = $user->id;
        try {
          $this->article_model->create_article($title, $content, $positionid, $userid);
          redirect('admin/articleposition');
        }
        catch(Exception $e) {
          $data['message'] = $e->getMessage();
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/pages/article', $data);
          $this->load->view('admin/templates/footer');
        }
      }
    } 
  }

  public function edit_article($id) {
    $data['title'] = ucfirst('edit category');
    $data['positions'] = $this->articleposition_model->get_all_positions();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
      if ($this->form_validation->run() == FALSE) {
        $data['formdata'] = $this->article_model->get_article($id);
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/editarticle', $data);
        $this->load->view('admin/templates/footer');
        
      } else {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $positionid = $this->input->post('position');
        $user = parent::checkLoginStatus();
        $userid = $user->id;
        $this->article_model->update_article($id, $title, $content, $positionid, $userid); 
        redirect('admin/articleposition');
      }  
    } else {
      $data['formdata'] = $this->article_model->get_article($id);
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/editarticle');
      $this->load->view('admin/templates/footer');
    }
  }

}