<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
    public function index()
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('home');
        $data['news'] = $this->pages_model->get_all_news();
        $name = 'content';
        $this->template->page_view($name, $data);
    }
    
    
}