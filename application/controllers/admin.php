<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function index()
    {
        $data['user'] = $this->session->userdata('email');
        $data['page_info'] = $this->pages_model->get_page_info('admin');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            $name = 'main';
            $this->template->admin_view($name, $data);
        }
    }
}