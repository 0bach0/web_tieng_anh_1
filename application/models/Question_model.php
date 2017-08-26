<?php

class Question_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_question_by_course($id){
      $query = $this->db->get_where('question', array('curriculum_id' => $id));
      return $query->result();
    }
}
