<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Articleposition_model extends CI_Model {

    // variables corresponding to the column names in the database
    public $id;
    public $name;

    public function __construct() {
      // Call the CI_Model constructor
      parent::__construct();
    }

    public function get_all_positions() {
      $this->db->select('*');
      $this->db->order_by('name', 'DESC');
      $query = $this->db->get('articleposition');
      return $query->result();
    }

    public function get_position($id) {
      $this->db->select('*');
      $this->db->where('id', $id);
      $query = $this->db->get('articleposition');
      return $query->result();
    }

    // get the position id of the article specified by its name
    public function get_position_name($name) {
      $this->db->select('*');
      $this->db->where('name', $name);
      $query = $this->db->get('articleposition');
      return $query->row();
    }

    public function update_position($id, $name) {
      $data = array(
        'name' => $name
      );
      $this->db->where('id', $id);
      $this->db->update('articleposition', $data);
    }

    public function create_position($name) {
      $this->db->select('*');
      $this->db->where('name', $name);
      $query = $this->db->get('articleposition');
      if($query->result()){
        throw new Exception("A category already exists");
      }
      $data = array (
        'name' => $name
      );
      $this->db->insert('articleposition', $data);
    }

    public function set_active($id, $positionid) {
      $this->db->where('articlepositionid', $positionid );
      $this->db->where('active','true');
      $query = $this->db->get('post');
      if($query) {
        $this->db->set('active', 'false');
        $this->db->where('articlepositionid', $positionid );
        $this->db->update('post');
      }
      $this->db->set('active', 'true');
      $this->db->where('id', $id);
      $this->db->where('articlepositionid', $positionid);
      $this->db->update('post');
    }
  }