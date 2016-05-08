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
            
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->form_validation->run() && $this->input->post('add')) {
                
                $add['title'] = $this->input->post('title');
                $add['title_url'] = $this->input->post('title_url');
                $add['text'] = $this->input->post('text');
                $add['keywords'] = $this->input->post('keywords');
                $add['email'] = $this->input->post('email');
                $add['pswd'] = $this->input->post('pswd');
                $add['preview_img'] = $this->input->post('userfile');
                $add['slider_img'] = $this->input->post('slider_img');
                
                /*Deleting of empty elements of array for adding category to database*/
                foreach($add as $key => $val) {
                    
                    if( ! $add[$key]) {
                        unset($add[$key]);
                    }
                }
                /*-------------------------------------------------------------*/
                
                $data['info'] = 'Добавление прошло успешно';
                $name = 'info';
                $this->pages_model->add_info($page, $add);
            } else {
                
                $name = 'add/' . $page;
                $this->template->admin_view($name, $data);
            }
        }
    }
}