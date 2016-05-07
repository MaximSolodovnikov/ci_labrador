<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

class Template {

    function page_view($name, $data)
    {
        $CI =& get_instance();

        $CI->load->view('blocks/scripts_view', $data);
        $CI->load->view('blocks/menu_view', $data);
        $CI->load->view('blocks/slider_view');
        $CI->load->view($name . '_view', $data);
        $CI->load->view('blocks/footer_view', $data);
    }
    
    function login_view($name, $data)
    {
        $CI =& get_instance();

        $CI->load->view('admin/' . $name . '_view', $data);
    }
    
    function admin_view($name, $data)
    {
        $CI =& get_instance();

        $CI->load->view('admin/admin_blocks/header_view', $data);
        $CI->load->view('admin/admin_blocks/menu_view', $data);
        $CI->load->view('admin/' . $name . '_view', $data);
        $CI->load->view('admin/admin_blocks/footer_view', $data);
    }
}