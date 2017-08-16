<?php

class News_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_entries($limit,$from)
    {
            $query = $this->db->select('title, image, short_description, slug,time')->limit($limit, $from)->get_where('post', array('type' => 'news'));
            return $query->result();
    }

    public function get_by_slug($slug)
    {
            $query = $this->db->get_where('post', array('slug' => $slug,'type' => 'news'),1);
            return $query->result();
    }

}
