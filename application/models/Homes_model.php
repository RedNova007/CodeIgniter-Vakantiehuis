<?php
class Homes_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_vacation_homes()
    {
    	$query = $this->db->get('vacation_homes');

   		return $query->result_array();
    }
}