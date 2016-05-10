<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
    public function index()
    {
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'index.php/news/index/';
        $config['total_rows'] = $this->db->count_all('articles');
        $config['per_page'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        $this->pagination->initialize($config); 
        
        $data['menu'] = $this->pages_model->get_menu();
        $data['page_info'] = $this->pages_model->get_page_info('news');
        $data['news'] = $this->pages_model->get_all_articles($config['per_page'], $this->uri->segment(3));
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