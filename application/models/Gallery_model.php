<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Gallery_model extends CI_Model {

    // variables corresponding to the column names in the database
    public $title;
    public $imagepath;
    public $id;

    public function __construct() {
      // Call the CI_Model constructor
      parent::__construct();
    }
    // gets the 20 latest images path stored in the database by the active category.
    public function get_active_category() {
      $this->db->select('*');
      $this->db->from('gallery');
      // $this->db->from('gallerycategory');
      $this->db->join('gallerycategory', 'gallerycategory.id = gallery.gallerycategoryid');
      $this->db->where('active', 'true');
      $query = $this->db->get();
      return $query->result();
    }

  }