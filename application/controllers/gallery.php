<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	
    public function index()
    {
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('gallery');
        /*$data['news'] = $this->pages_model->get_all_articles();*/
		$data['img_for_gallery'] = $this->pages_model->get_all_img();
        $name = 'gallery';
        $this->template->page_view($name, $data);
    }
}