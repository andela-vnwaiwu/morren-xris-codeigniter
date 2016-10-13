<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Gallery_model extends CI_Model {

    // variables corresponding to the column names in the database
    public $title;
    public $imagepath;
    public $gallerycategoryid;
    public $id;

    public function __construct() {
      // Call the CI_Model constructor
      parent::__construct();
    }
    // gets the images path stored in the database for a category.
    public function get_image_by_category($gallerycategoryid) {
      $this->db->where('gallerycategoryid', $gallerycategoryid);
      $query = $this->db->get('gallery');
      return $query->result();
    }

    public function set_image($imagepath, $title, $categoryid) {
      $this->imagepath = $imagepath;
      $this->title = $title;
      $this->gallerycategoryid = $categoryid;
      $this->db->insert('gallery', $this);
    }

    public function get_image($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('gallery', 1);
      return $query->row();
    }
    public function delete_image($id) {
      $this->db->where('id', $id);
      $this->db->delete('gallery');
    }
     
  }