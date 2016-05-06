<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
    public function index()
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('news');
        $data['news'] = $this->pages_model->get_all_articles();
        $name = 'news';
        $this->template->page_view($name, $data);
    }
    
    public function page($title)
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info($title);
        $data['news'] = $this->pages_model->get_all_articles();
        $name = 'news';
        $this->template->page_view($name, $data);
    }
}