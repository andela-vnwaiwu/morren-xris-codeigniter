<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Gallery_model extends CI_Model {

    //
    public $title;
    public $path;
    public $id;

    public function __construct() {
      // Call the CI_Model constructor
      parent::__construct();
    }

    public function get_all_images() {
      $this->db->select('*');
      $this->db->order_by('created', 'DESC');
      $query = $this->db->get('gallery', 20);
      return $query->result();
    }

  }