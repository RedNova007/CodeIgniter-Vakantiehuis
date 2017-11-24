<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function search($search)
    {
        $this->db->select('*');
    	$this->db->from('vacation_homes');
    	$this->db->like('name', $search);
    	//$this->db->or_like('sleeps',$search);
    	$query = $this->db->get();
    	return $query->result();
    }
}