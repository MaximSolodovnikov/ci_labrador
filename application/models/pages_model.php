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
        $query = $this->db->get('articles');
        return $query->result_array();
    }
    
    public function get_articles($title)
    {
        $this->db->where('title_url', $title);
        $query = $this->db->get('articles');
        return $query->row_array();
    }
    
    /*Output of comments*/
    function get_comments($article_id) {
        
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->join('users', 'users.id = comments.username_id', 'left');
        $this->db->where('comments.article_id', $article_id);
        $query = $this->db->get();
        return $query->result_array();
    }
}
