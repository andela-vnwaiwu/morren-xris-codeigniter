<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    // load the cloudinary dummy library
    $this->load->library('cloudinarylib');
  }

  public function index() {
    $check_user = parent::checkLoginStatus();
    if($check_user == TRUE) {
      $data['title'] = ucfirst('Upload'); // Capitalize the first letter

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/upload', array('error' => ' ' ));
      $this->load->view('admin/templates/footer');
    } else {
      redirect('admin/auth');
    }
    
  }

  public function do_upload() {
    $data['title'] = 'Upload Status';
  
    $title = $_POST['title'];
    $upload_file = $this->cloudinarylib->upload($_FILES["filename"]["tmp_name"],
      array(
        "crop" => "limit", "width" => "1024", "height" => "768"
      ));
    $path = $upload_file['secure_url'];
    $this->load->model('admin/gallery_model', '', TRUE);
    $this->gallery_model->set_image($path, $title);

    $data['imagepath'] = $path;
    $data['imagename'] = $title;

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/upload_success', $data);
    $this->load->view('admin/templates/footer');
  }

}