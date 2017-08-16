<?php

class Teacher_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_teacher()
    {
            $query = $this->db->get('teacher');
            return $query->result();
    }


}
