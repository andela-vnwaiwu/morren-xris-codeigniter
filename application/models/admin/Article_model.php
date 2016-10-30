<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Article_model extends CI_Model {

    // variables corresponding to the column names in the database
    public $title;
    public $content;
    public $articlepositionid;
    public $userid;
    public $id;

    public function __construct() {
      // Call the CI_Model constructor
      parent::__construct();
    }
    // gets the images path stored in the database for a category.
    public function get_articles_by_position($articlepositionid) {
      $this->db->where('articlepositionid', $articlepositionid);
      $query = $this->db->get('post');
      return $query->result();
    }

    public function create_article($title, $content, $articlepositionid, $userid) {
      $this->db->select('*');
      $this->db->where('title', $title);
      $query = $this->db->get('post');
      if($query->result()){
        throw new Exception("An article with this title already exists");
      }
      $data = array (
          'title' => $title,
          'content' => $content,
          'articlepositionid' => $articlepositionid,
          'userid' => $userid
      );
      $this->db->insert('post', $data);
    }

    public function get_article($id) {
      $this->db->where('id', $id);
      $query = $this->db->get('post', 1);
      return $query->row();
    }

    public function get_active_article($positionid) {
      $this->db->where('active', 'true');
      $this->db->where('articlepositionid', $positionid);
      $query = $this->db->get('post', 1);
      return $query->row();
    }

    public function delete_article($id) {
      $this->db->where('id', $id);
      $this->db->delete('post');
    }
     
    public function update_article($id, $title, $content, $articlepositionid, $userid) {
      $data = array(
        'title' => $title,
        'content' => $content,
        'articlepositionid' => $articlepositionid,
        'userid' => $userid
      );
      $this->db->where('id', $id);
      $this->db->update('post', $data);
    }
  }