<?php

class Schedule_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_schedule_list()
    {
      $this->db->distinct('curriculum.id');
      $this->db->select('curriculum.id, name');
      $this->db->from('curriculum');
      $this->db->join('schedule', 'curriculum.id =schedule.curriculum_id');

      return $this->db->get()->result();
    }

    public function get_schedule_full()
    {
      $this->db->select('curriculum_id, name,class_name,schedule,start_day,fee,show_item,schedule.id,other_benefit');
      $this->db->from('curriculum');
      $this->db->join('schedule', 'schedule.curriculum_id = curriculum.id');

      return $this->db->get()->result();
    }

    public function get_schedule_show()
    {
      $this->db->select('curriculum_id, name,class_name,schedule,start_day,fee');
      $this->db->from('curriculum');
      $this->db->where('show_item',true);
      $this->db->join('schedule', 'schedule.curriculum_id = curriculum.id');

      return $this->db->get()->result();
    }


}
