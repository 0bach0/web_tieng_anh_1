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

    public function get_time_by_id($id){
      $query = $this->db->select('id,title,test_time')->get_where('curriculum', array('id' => $id));
      return $query->result();
    }

    public function set_time_by_id($id,$test_time){
      $data = array(
        'test_time' => $test_time
      );
      $this->db->where('id', $id);
      $this->db->update('curriculum', $data);
    }

}
