<?php

class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_by_username($username)
    {
            $query = $this->db->get_where('admin', array('username' => $username),1);
            return $query->result();
    }

}
