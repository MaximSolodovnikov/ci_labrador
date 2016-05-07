<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function index()
    {
        $data['page_info'] = /*$this->pages_model->get_articles($title);*/'';
        $name = 'main';
        $this->template->admin_view($name, $data);
    }
}
	