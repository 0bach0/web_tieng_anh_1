<?php

class Review_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_show()
    {
            $query = $this->db->get_where('review', array('show_item' => true),10);
            return $query->result();
    }

    public function get_review($limit,$from)
    {
            $query = $this->db->limit($limit, $from)->get('review');
            return $query->result();
    }


}
