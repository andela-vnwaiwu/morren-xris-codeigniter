<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articleposition extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('cloudinarylib');
    $this->load->model('admin/articleposition_model', '', TRUE);
    $this->load->model('admin/article_model', '', TRUE);
    $this->form_validation->set_rules('name', 'name', 'required');
    if(! parent::checkLoginStatus()) {
      redirect('admin/auth');
    }
  }

  public function index() {
    $data['title'] = ucfirst('positions'); // Capitalize the first letter
    $data['query'] = $this->articleposition_model->get_all_positions();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/articleposition', $data);
    $this->load->view('admin/templates/footer');    
  }

  public function create_position() {
    $data['title'] = ucfirst('create position');
    $data['query'] = $this->articleposition_model->get_all_positions();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if($this->form_validation->run() == FALSE) {
        $data['message'] = 'Sorry...You did not fill the form correctly';

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/articleposition', $data);
        $this->load->view('admin/templates/footer');
      } else {
        $name = $this->input->post('name');
        try {
          $this->articleposition_model->create_position($name);
          redirect('admin/articleposition');
        }
        catch(Exception $e) {
          $data['message'] = $e->getMessage();
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/pages/articleposition', $data);
          $this->load->view('admin/templates/footer');
        }
      }
    } else {
      redirect('admin/articleposition');
    }
  }

  public function edit_position($id) {
    $data['title'] = ucfirst('edit position');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
      if ($this->form_validation->run() == FALSE) {
        $data['formdata'] = $this->articleposition_model->get_position($id);
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/editposition', $data);
        $this->load->view('admin/templates/footer');
        
      } else {
        $name = $this->input->post('name');
        $this->articleposition_model->update_position($id, $name); 
        redirect('admin/articleposition');
      }  
    } else {
      $data['formdata'] = $this->articleposition_model->get_category($id);
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/editposition`');
      $this->load->view('admin/templates/footer');
    }
  }

  public function delete_category($id) {
    $data['title'] = ucfirst('Delete category');
    $this->articleposition_model->delete_category($id);
    redirect('admin/Articlepositions');
  }

  public function delete_image($id) {
    $data['title'] = ucfirst('Delete Image');
    $query = $this->Article_model->get_image($id);
    if(isset($query)) {
      $categoryid = $query->Articlecategoryid;
      $imagepath = $query->imagepath;
      $image = explode('/', $imagepath);
      $image_name = end($image);
      $public_id = explode('.', $image_name)[0];
      $this->cloudinarylib->delete($public_id);
      $this->Article_model->delete_image($id);
      redirect('admin/Articlepositions/get_category_images/'.$categoryid);
    }  
    
  }

  public function set_active($id) {
    $this->articleposition_model->set_active($id);
    $data['title'] = ucfirst('Article positions');
    $data['query'] = $this->articleposition_model->get_all_positions();
    $data['message'] = 'You have made the category active';
    
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/Articlecategory', $data);
    $this->load->view('admin/templates/footer');
  }

  public function get_position_articles($id) {
    $data['title'] = ucfirst('Articles');
    $data['query'] = $this->article_model->get_articles_by_position($id);
    
    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/positionarticles', $data);
    $this->load->view('admin/templates/footer');
  }
}