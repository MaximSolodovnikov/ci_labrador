<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
    public function index()
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('main');
        $data['last_news'] = $this->pages_model->get_last_article();
        $data['slider'] = $this->pages_model->get_slider_img();
        $name = 'main';
        $this->template->page_view($name, $data);
    }
    
    public function page($title)
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info($title);
        $name = 'main';
        $this->template->page_view($name, $data);
    }
}