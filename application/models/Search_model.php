<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //public function search($search)
    //{
    //    $this->db->select('*');
    //	$this->db->from('vacation_homes');
    //	$this->db->like('name', $search);
    //	//$this->db->or_like('sleeps',$search);
    //	$query = $this->db->get();
    //	return $query->result();
    //}

    public function search($search)
    {
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->join('vacation_homes', 'vacation_homes.id = booking.vacation_home_id', 'inner');

        $this->db->not_like('booking.arrival', $search)
        $this->db->or_not_like('booking.departure', $search)

        //$this->db->where("");
        //$this->db->where("$search BETWEEN 'booking.arrival' AND 'booking.departure'");

        $query = $this->db->get();
        return $query->result();
    }
}