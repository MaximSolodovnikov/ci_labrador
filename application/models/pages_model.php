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
}
