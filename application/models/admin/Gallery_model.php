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
    // gets the 20 latest images path stored in the database.
    public function get_all_images() {
      $this->db->select('*');
      $this->db->order_by('created', 'DESC');
      $query = $this->db->get('gallery', 20);
      return $query->result();
    }

    public function set_image($imagepath, $title, $categoryid) {
      $this->imagepath = $imagepath;
      $this->title = $title;
      $this->gallerycategoryid = $categoryid;
      $this->db->insert('gallery', $this);
    }
  }