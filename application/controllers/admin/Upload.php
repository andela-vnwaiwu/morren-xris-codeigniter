<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends BackendController {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index() {

    $data['title'] = ucfirst('Upload'); // Capitalize the first letter

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/pages/upload', array('error' => ' ' ));
    $this->load->view('admin/templates/footer');
  }

  public function do_upload() {
    $config['upload_path']          = './images/gallery/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1024;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $data['title'] = 'Upload Status';

    $this->load->library('upload', $config);
    $this->load->model('admin/gallery_model', '', TRUE);

    $field_name = 'filename';

    if ( ! $this->upload->do_upload($field_name)) {
      $error = array('error' => $this->upload->display_errors());

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/upload', $error);
      $this->load->view('admin/templates/footer');

    } else {

      $data = array('upload_data' => $this->upload->data());
      $title = $_POST['title'];
      $filename = $this->upload->data('file_name');
      $path = base_url(). 'images/gallery/' . $filename;

      $this->gallery_model->set_image($path, $title);

      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/pages/upload_success', $data);
      $this->load->view('admin/templates/footer');
    }
  }

}