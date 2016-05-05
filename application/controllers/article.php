<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	
    public function view($title)
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_articles($title);
        $name = 'page';
        $this->template->page_view($name, $data);
    }
}