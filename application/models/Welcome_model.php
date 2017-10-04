<?php
class Welcome_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_vacation_home()
    {
		$query = $this->db->query('SELECT * FROM vacation_homes ORDER BY rand() LIMIT 1');
		$row = $query->row_array();

    	return $row;
    }

    public function get_homepage_picture()
    {
		$query = $this->db->query('SELECT * FROM homepage_pictures ORDER BY rand() LIMIT 1');
		$row = $query->row_array();

    	return $row;
    }
}