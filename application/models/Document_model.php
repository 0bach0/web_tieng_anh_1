<?php

class Document_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_entries($sub_type,$limit,$from)
    {
      if($sub_type===''){
        $query = $this->db->select('title, image, short_description, slug,time')->limit($limit, $from)->get_where('post');
      }
      else 
        $query = $this->db->select('title, image, short_description, slug,time')->limit($limit, $from)->get_where('post', array('type' => 'document','sub_type' => $sub_type));
        return $query->result();
    }

    public function get_by_slug($sub_type,$slug)
    {
            $query = $this->db->get_where('post', array('slug' => $slug,'sub_type' => $sub_type),1);
            return $query->result();
    }

}
