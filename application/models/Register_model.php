<?php

class Register_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($name,$phone,$email,$course)
    {
      $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'course' => $course
      );
      $query = $this->db->insert('register',$data);
      return true;
    }

}
