<?php
class Page extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('curriculum_model');
      $result = $this->curriculum_model->get_curriculum_list();
      
      $this->data['curriculum-list'] = $result;
    }
    
    public function view($page = 'home')
    {
      if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
      {
              // Whoops, we don't have a page for that!
              show_404();
      }

      $data['title'] = ucfirst($page); // Capitalize the first letter
      
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer', $data);
    }
}