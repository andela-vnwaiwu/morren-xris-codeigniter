<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallerycategories extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->model('admin/gallerycategories_model', '', TRUE);
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('description', 'description', 'required');
    if(! parent::checkLoginStatus()) {
      redirect('admin/auth');
    }
  }

  public function index() {
    $data['title'] = ucfirst('categories'); // Capitalize the first letter
    $data['query'] = $this->gallerycategories_model->get_all_categories();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/gallerycategory', $data);
    $this->load->view('admin/templates/footer');    
  }

  public function create_category() {
    $data['title'] = ucfirst('create category');
    $data['query'] = $this->gallerycategories_model->get_all_categories();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if($this->form_validation->run() == FALSE) {
        $data['message'] = 'Sorry...You did not fill the form correctly';

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/gallerycategory', $data);
        $this->load->view('admin/templates/footer');
      } else {
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $query = $this->gallerycategories_model->create_category($name, $description);
        if($query === $name) {
          $data['message'] = 'A category with that name already exists';
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/pages/gallerycategory', $data);
          $this->load->view('admin/templates/footer');
        }else{
          redirect('admin/gallerycategories');
        }
      }
    } else {
      redirect('admin/gallerycategories');
    }
  }

  public function edit_category($id) {
    $data['title'] = ucfirst('edit category');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
      if ($this->form_validation->run() == FALSE) {
        $data['formdata'] = $this->gallerycategories_model->get_category($id);
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/editcategory', $data);
        $this->load->view('admin/templates/footer');
        
      } else {
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $this->gallerycategories_model->update_category($id, $name, $description); 
        redirect('admin/gallerycategories');
      }  
    } else {
      $data['formdata'] = $this->gallerycategories_model->get_category($id);
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/editcategory');
      $this->load->view('admin/templates/footer');
    }
  }

  public function delete_category($id) {
    $data['title'] = ucfirst('Delete category');
    $this->gallerycategories_model->delete_category($id);
    redirect('admin/gallerycategories');
  }
}