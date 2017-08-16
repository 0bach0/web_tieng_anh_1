<?php

class Image_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_show_image()
    {
      $query = $this->db->get_where('image', array('show_item' => '1'));
      return $query->result();
    }

}
