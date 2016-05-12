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

            $this->form_validation->set_rules($this->rules_model->$page);
            
            if ($page == 'articles') {

                $data['page_info'] = $this->pages_model->get_page_info('add_articles');
                if ($this->form_validation->run() && $this->input->post('add')) {

                //Adding main picture of article

                $config['upload_path'] = './images/news/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']	= '1000';
                $config['encrypt_name']  = TRUE;
                $config['remove_spaces']  = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {

                    $add['preview_img'] = 'default-article.png';
                        
                } else {

                    $upload_data = $this->upload->data();
                    $add['preview_img'] = $upload_data['file_name'];
                }
                
                $add['title'] = $this->input->post('title');
                $add['title_url'] = $this->input->post('title_url');
                $add['text'] = $this->input->post('text');
                $add['keywords'] = $this->input->post('keywords');
                
                $this->pages_model->add_info($page, $add);
                redirect(base_url() . 'index.php/admin');
                //-------------------------------------
                } else {
                    $name = 'add/' . $page;
                    $this->template->admin_view($name, $data);
                }
            } elseif ($page == 'users') {
                
                $data['page_info'] = $this->pages_model->get_page_info('add_users');
                if ($this->form_validation->run() && $this->input->post('add')) {
                    
                    $add['email'] = $this->input->post('email');
                    $add['pswd'] = $this->input->post('pswd');
                    $this->pages_model->add_info($page, $add);
                    redirect(base_url() . 'index.php/admin');
                } else {
                    $name = 'add/' . $page;
                    $this->template->admin_view($name, $data);
                }
            } elseif($page == 'slider') {
                
                $data['page_info'] = $this->pages_model->get_page_info('add_slider');
                
                if ($this->input->post('add')) {
                    
                    $config['upload_path'] = './images/slider/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
                    $config['max_size']	= '1000';
                    $config['encrypt_name']  = TRUE;
                    $config['remove_spaces']  = TRUE;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('userfile')) {
                        
                        $name = 'add/info';
                        $this->template->admin_view($name, $data);
                        
                    } else {
                        
                        $upload_data = $this->upload->data();
                        $add['slider_img'] = $upload_data['file_name'];

                        $this->pages_model->add_info($page, $add);
                        redirect(base_url() . 'index.php/admin');
                    } 
                } else {
                    $name = 'add/' . $page;
                    $this->template->admin_view($name, $data);
                }
            }
        }
    }
    
    function editlist($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            if($page == 'articles'){
                
                //For link on editing page in article_list_view
                $data['page'] = $page;
                $data['page_info'] = $this->pages_model->get_page_info('articles_editlist');
                $data['articles_list'] = $this->pages_model->get_editlist($page);
                $name = 'edit/articles_list';
                $this->template->admin_view($name, $data);
                
            } elseif ($page == 'users') {
                
                //For link on editing page in article_list_view
                $data['page'] = $page;
                $data['page_info'] = $this->pages_model->get_page_info('users_editlist');
                $data['users_list'] = $this->pages_model->get_editlist($page);
                $name = 'edit/users_list';
                $this->template->admin_view($name, $data);
                
            } else {
                
                $data['page_info'] = $this->pages_model->get_page_info('slider_editlist');
                $data['slider_list'] = $this->pages_model->get_editlist($page);
                $name = 'edit/slider_list';
                $this->template->admin_view($name, $data);
            }
        }
    }
    
    function edit($page, $id = '')
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {

            $this->form_validation->set_rules($this->rules_model->$page);
            
            if ($page == 'articles') {
                
                //get_info() - data about specific article
                $data['page_info'] = $this->pages_model->get_info($page, $id);
                if ($this->form_validation->run() && $this->input->post('edit')) {
                
                //Adding main picture of article
                $config['upload_path'] = './images/news/images/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']	= '1000';
                $config['encrypt_name']  = TRUE;
                $config['remove_spaces']  = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {

                    $add['preview_img'] = 'default-article.png';
                        
                } else {

                    $upload_data = $this->upload->data();
                    $edit['preview_img'] = $upload_data['file_name'];
                }
                
                $edit['title'] = $this->input->post('title');
                $edit['title_url'] = $this->input->post('title_url');
                $edit['text'] = $this->input->post('text');
                $edit['keywords'] = $this->input->post('keywords');
                
                $this->pages_model->edit_info($page, $id, $edit);
                redirect(base_url() . 'index.php/admin');
                //-------------------------------------
                } else {
                    $name = 'edit/' . $page;
                    $this->template->admin_view($name, $data);
                }
            } elseif ($page == 'users') {
                
                //get_info() - data about specific article
                $data['page_info'] = $this->pages_model->get_info($page, $id);
                if ($this->form_validation->run() && $this->input->post('edit')) {
                    
                    $edit['email'] = $this->input->post('email');
                    $edit['pswd'] = $this->input->post('pswd');
                    $this->pages_model->edit_info($page, $id, $edit);
                    redirect(base_url() . 'index.php/admin');
                } else {
                    $name = 'edit/' . $page;
                    $this->template->admin_view($name, $data);
                }
            } elseif($page == 'slider') {
                
                $data['page_info'] = $this->pages_model->get_page_info('add_slider');
                
                if ($this->input->post('add')) {
                    
                    $config['upload_path'] = './images/slider/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
                    $config['max_size']	= '1000';
                    $config['encrypt_name']  = TRUE;
                    $config['remove_spaces']  = TRUE;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('userfile')) {
                        
                        $name = 'add/info';
                        $this->template->admin_view($name, $data);
                        
                    } else {
                        
                        $upload_data = $this->upload->data();
                        $add['slider_img'] = $upload_data['file_name'];

                        $this->pages_model->add_info($page, $add);
                        redirect(base_url() . 'index.php/admin');
                    } 
                } else {
                    $name = 'add/' . $page;
                    $this->template->admin_view($name, $data);
                }
            }
        }
    }
    
    function del($page)
    {
        $data['user'] = $this->session->userdata('email');
        $data['error'] = '';
        
        if (empty($data['user'])) {
            
            $name = 'login';
            $this->template->login_view($name, $data);
        } else {
            
            if ($page == 'articles') {
                
                //For link on editing page in article_list_view
                $data['page'] = $page;
                $data['articles_list'] = $this->pages_model->get_editlist($page);
                if ($this->input->post('del')) {
                
                    $id = $this->input->post('id');
                    $this->pages_model->del_info($page, $id);
                    redirect(base_url() . 'index.php/admin');
                    
                } else {
                    $name = 'del/articles_list';
                    $this->template->admin_view($name, $data);
                }
            } elseif ($page == 'users') {
                
                //get_info() - data about specific article
                $data['page_info'] = $this->pages_model->get_info($page, $id);
                if ($this->input->post('edit')) {
                    
                    $this->pages_model->edit_info($page, $id);
                    redirect(base_url() . 'index.php/admin');
                } else {
                    $name = 'edit/' . $page;
                    $this->template->admin_view($name, $data);
                }
            } elseif($page == 'slider') {
                
                $data['page_info'] = $this->pages_model->get_page_info('add_slider');
                
                if ($this->input->post('add')) {
                    
                    $config['upload_path'] = './images/slider/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG';
                    $config['max_size']	= '1000';
                    $config['encrypt_name']  = TRUE;
                    $config['remove_spaces']  = TRUE;

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('userfile')) {
                        
                        $name = 'add/info';
                        $this->template->admin_view($name, $data);
                        
                    } else {
                        
                        $upload_data = $this->upload->data();
                        $add['slider_img'] = $upload_data['file_name'];

                        $this->pages_model->add_info($page, $add);
                        redirect(base_url() . 'index.php/admin');
                    } 
                } else {
                    $name = 'add/' . $page;
                    $this->template->admin_view($name, $data);
                }
            }
        }
    }
}