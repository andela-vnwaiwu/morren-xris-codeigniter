<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Gallerycategories_model extends CI_Model {

    // variables corresponding to the column names in the database
    public $id;
    public $name;
    public $description;

    public function __construct() {
      // Call the CI_Model constructor
      parent::__construct();
    }
    // gets the 20 latest images path stored in the database.
    public function get_all_categories() {
      $this->db->select('*');
      $this->db->order_by('name', 'DESC');
      $query = $this->db->get('gallerycategory');
      return $query->result();
    }

    public function get_category($id) {
      $this->db->select('*');
      $this->db->where('id', $id);
      $query = $this->db->get('gallerycategory');
      return $query->result();
    }

    public function update_category($id, $name, $description) {
      $data = array(
        'name' => $name,
        'description' => $description
      );
      $this->db->where('id', $id);
      $this->db->update('gallerycategory', $data);
    }

    public function create_category($name, $description) {
      $this->db->where('name', $name);
      $query = $this->db->get('gallerycategory');
      if($query){
        return $name;
      } else {
        $data = array (
          'name' => $name,
          'description' => $description
        );
        $this->db->insert('gallerycategory', $data);
        return $data;
      }
      
    }

    public function delete_category($id) {
      $this->db->where('id', $id);
      $this->db->delete('gallerycategory');
    }

    public function set_active($id) {
      $this->db->where('active','true');
      $query = $this->db->get('gallerycategory');
      if($query) {
        $this->db->set('active', 'false');
        $this->db->update('gallerycategory');
      }
      $this->db->set('active', 'true');
      $this->db->where('id', $id);
      $this->db->update('gallerycategory');


    }
  }