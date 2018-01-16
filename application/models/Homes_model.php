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

    public function get_vacationhome_info($homeId)
    {
    	$where = $this->db->where('id', $homeId);
    	$query = $this->db->get('vacation_homes');	
    	
    	return $query->row_array();
    }
    public function get_vacationhome_images($homeId)
    {
        $imageId = array();
        $imageId = $this->db->get('images');
        $where = $this->db->where('vacation_home_id', $homeId);
        $query = $this->db->get('images');
        $result = $query->row_array(); 

        return $result; 
       





    }
}