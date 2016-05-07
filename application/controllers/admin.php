<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function index()
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            $data['page_info'] = $this->pages_model->get_page_info('admin');
            $name = 'main';
            $this->template->admin_view($name, $data);
        }
    }
    
    function logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url());
    }
    
    function add($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            $data['page_info'] = $this->pages_model->get_page_info('admin');
            $name = 'add/' . $page;
            $this->template->admin_view($name, $data);
        }
    }
}