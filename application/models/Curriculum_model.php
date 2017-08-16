<?php

class Curriculum_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_curriculum_list()
    {
      $query = $this->db->get('curriculum');
      return $query->result();
    }

}
