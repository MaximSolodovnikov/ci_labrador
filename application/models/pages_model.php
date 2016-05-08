<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pages_model extends CI_Model {
	
    public function get_menu()
    {
        $this->db->where('hidden', 'no');
        $query = $this->db->get('pages');
        return $query->result_array();
    }
            
    public function get_page_info($title) {
        
        $this->db->where('title_url', $title);
        $query = $this->db->get('pages');
        return $query->row_array();
    }
    
    public function get_all_articles()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('articles');
        return $query->result_array();
    }
    
    public function get_articles($title)
    {
        $this->db->where('title_url', $title);
        $query = $this->db->get('articles');
        return $query->row_array();
    }
    
    /*Output last article*/
    function get_last_article() 
    {
        $this->db->order_by('id', 'desc');
        $this->db->limit('1');
        $query = $this->db->get('articles');
        return $query->row_array();
    }
    
    /*Output images of specific article*/
    function get_images($title) {
        
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->join('images', 'images.article_id = articles.id', 'left');
        $this->db->where('articles.title_url', $title);
        $query = $this->db->get();
        return $query->result_array();
    }
	
    function get_all_img()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    function get_slider_img()
    {
        $query = $this->db->get('slider');
        return $query->result_array();
    }


    /*Checking username and password to login*/
    function check_data_for_authorization($email, $pswd) {
        
        $this->db->where('email', $email);
        $this->db->where('pswd', $pswd);
        $this->db->select('email');
        $query = $this->db->get('users');
        
        if($query->num_rows() > 0) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}
