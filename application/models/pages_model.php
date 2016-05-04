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
    
    public function get_all_news()
    {
        $query = $this->db->get('news');
        return $query->result_array();
    }
}
