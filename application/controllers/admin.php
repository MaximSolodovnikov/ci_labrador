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
                
				/*Adding main picture of article*/
                if($page == 'articles') {
                    
                    $config['upload_path'] = './images/news/images/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '1000';
                    $config['encrypt_name']  = TRUE;
                    $config['remove_spaces']  = TRUE;
		
                    $this->load->library('upload', $config);
                    
                    if( ! $this->upload->do_upload('userfile')) {
                            
                            $add['preview_img'] = 'default-article.png';
                    }
                    else {
                            
                        $upload_data = $this->upload->data();
                        $add['preview_img'] = $upload_data['file_name'];
                        $config['source_image']	= $upload_data['full_path']; 
                        $config['new_image'] = APPPATH . '../images/articles/thumbs';
                        $config['maintain_ratio'] = TRUE; 
                        $config['width']	= 48; 
                        $config['height']	= 48;
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                    }
                }
                /*-------------------------------------*/
				
                $add['title'] = $this->input->post('title');
                $add['title_url'] = $this->input->post('title_url');
                $add['text'] = $this->input->post('text');
                $add['keywords'] = $this->input->post('keywords');
                $add['email'] = $this->input->post('email');
                $add['pswd'] = $this->input->post('pswd');
                $add['slider_img'] = $this->input->post('slider_img');

                /*Deleting of empty elements of array for adding category to database*/
                foreach($add as $key => $val) {
                    
                    if( ! $add[$key]) {
                        
                        unset($add[$key]);
                    }
                }
                /*-------------------------------------------------------------*/
                
                $this->pages_model->add_info($page, $add);
                redirect(base_url() . 'index.php/admin');
            } else {
                
                $name = 'add/' . $page;
                $this->template->admin_view($name, $data);
            }
        }
    }
    
    /*function articles_editlist($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            $data['page_info'] = $this->pages_model->get_page_info($page);
            $data['articles_list'] = $this->pages_model->get_articles_editlist();
            $name = 'edit/articles_editlist';
            $this->template->admin_view($name, $data);
        }
    }
    
    function users_editlist($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            $data['page_info'] = $this->pages_model->get_page_info($page);
            $data['users_list'] = $this->pages_model->get_users_editlist();
            $name = 'edit/users_editlist';
            $this->template->admin_view($name, $data);
        }
    }
    
    function slider_editlist($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            $data['page_info'] = $this->pages_model->get_page_info($page);
            $data['slider_list'] = $this->pages_model->get_slider_editlist();
            $name = 'edit/slider_editlist';
            $this->template->admin_view($name, $data);
        }
    }*/
    
    function editlist($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            if($page == 'articles'){
                
                $data['page_info'] = $this->pages_model->get_page_info($page);
                $data['articles_list'] = $this->pages_model->get_editlist($page);
                $name = 'edit/articles';
                $this->template->admin_view($name, $data);
                
            } elseif ($page == 'users') {
                
                $data['page_info'] = $this->pages_model->get_page_info($page);
                $data['users_list'] = $this->pages_model->get_editlist($page);
                $name = 'edit/users';
                $this->template->admin_view($name, $data);
            } else {
                
                $data['page_info'] = $this->pages_model->get_page_info($page);
                $data['slider_list'] = $this->pages_model->get_editlist($page);
                $name = 'edit/slider';
                $this->template->admin_view($name, $data);
            }
        }
    }
}