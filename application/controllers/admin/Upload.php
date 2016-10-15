<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->model('admin/gallerycategories_model', '', TRUE);
    $this->load->library('form_validation');
    $this->load->library('cloudinarylib');
    $this->form_validation->set_rules('title', 'title', 'required');
    $this->form_validation->set_rules('category', 'category', 'required');
    if(empty($_FILES['filename']['name'])){
      $this->form_validation->set_rules('userfile', 'Document', 'required');
    }
    if(! parent::checkLoginStatus()) {
      redirect('admin/auth');
    }
  }

  public function index() {
    $data['title'] = ucfirst('Upload'); // Capitalize the first letter
    $data['categories'] = $this->gallerycategories_model->get_all_categories();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/upload', $data);
    $this->load->view('admin/templates/footer');
  }

  public function do_upload() {
    $data['title'] = 'Upload Status';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if($this->form_validation->run() == FALSE) {
        $data['message'] = 'You did not fill the form correctly';
        $data['categories'] = $this->gallerycategories_model->get_all_categories();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pages/upload', $data);
        $this->load->view('admin/templates/footer');
      } else {
        $title = $_POST['title'];
        $categoryid = $_POST['category'];
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $detectedType = exif_imagetype($_FILES['filename']['tmp_name']);
        $error = !in_array($detectedType, $allowedTypes);
        if(!$error) {
          $upload_file = $this->cloudinarylib->upload($_FILES['filename']['tmp_name'],
          array(
            "crop" => "limit", "width" => "1024", "height" => "768"
          ));
          $data['message'] = 'Your  file has been uploaded successfully';
          $path = $upload_file['secure_url'];
          $this->load->model('admin/gallery_model', '', TRUE);
          $this->gallery_model->set_image($path, $title, $categoryid);

          $data['imagepath'] = $path;
          $data['imagename'] = $title;

          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/pages/upload_success', $data);
          $this->load->view('admin/templates/footer');
        } else {
          $data['message'] = 'Your Image could not be uploaded. Try uploading an image file less than 1024 x 768 pixels';
          $this->load->view('admin/templates/header', $data);
          $this->load->view('admin/pages/upload_success', $data);
          $this->load->view('admin/templates/footer');
        }
      }
    }
  }

}