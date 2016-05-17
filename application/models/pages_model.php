<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_model extends CI_Model {
	
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
    
    public function get_all_articles($num, $offset)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('articles', $num, $offset);
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
	
    function get_all_img($num, $offset)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('images', $num, $offset);
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
    
    /*Added info about articles, users and slider images to database*/
    function add_info($page, $add)
    {
        $this->db->insert($page, $add);
        $return_id = $this->db->insert_id(); 
        return $return_id;
    }

    function add_img($photos)
    {
        $this->db->insert('images', $photos);

    }
    
    function get_editlist($page)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get($page);
        return $query->result_array();
    }
    
    function get_info($page, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($page);
        return $query->row_array();
        
    }
    
    function edit_info($page, $id, $edit)
    {
        $this->db->where('id', $id);
        $this->db->update($page, $edit);
    }
    
    function del_info($page, $id)
    {
        $this->db->where('id', $id);
        $this->db->delete($page);
    }
}
