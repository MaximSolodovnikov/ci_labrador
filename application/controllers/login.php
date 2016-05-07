<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    function index()
    {
        $data['page_info'] = $this->pages_model->get_page_info('login');
        $data['error'] = '';

        if ($this->input->post('enter')) {
            if (empty($this->input->post('email')) && empty($this->input->post('pswd'))) {
                
                $data['error'] = "Вы не заполнили все поля";
                $name = 'login';
                $this->template->login_view($name, $data);
                
            } elseif (empty($this->input->post('email'))) {
                
                $data['error'] = "Вы не ввели email";
                $name = 'login';
                $this->template->login_view($name, $data);
                
            } elseif (empty($this->input->post('pswd'))) {
            
                $data['error'] = "Вы не ввели пароль";
                $name = 'login';
                $this->template->login_view($name, $data);

            } else {
                $email = $this->input->post('email');
                $pswd = $this->input->post('pswd');
                if ($this->pages_model->check_data_for_authorization($email, $pswd)) {
                    
                    $ses_data = array (
                        'email' => $email
                    );
                    
                    $this->session->set_userdata($ses_data);
                    redirect(base_url() . 'index.php/admin');
                } else {
                    
                    $data['error'] = "Данные email или пароль не существуют";
                    $name = 'login';
                    $this->template->login_view($name, $data);
                }
            }
        } else {
            $name = 'login';
            $this->template->login_view($name, $data);
        }
    }
}
	