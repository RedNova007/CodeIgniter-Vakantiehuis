<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function search($nameQuery = null, $dateQuery = null, $dateQuery2 = null, $guestQuery = null)
    {
        $this->db->select('*');
        $this->db->from('vacation_homes');
        $this->db->join('booking', 'vacation_homes.id = booking.vacation_home_id', 'left');

        if ($dateQuery != null && $dateQuery2 != null) {
            $this->db->group_start()
                ->where("booking.arrival < '".$dateQuery."'")
                ->or_where("booking.arrival IS null")
                ->or_where("booking.departure > '".$dateQuery2."'")
                ->or_where("booking.departure IS null")
            ->group_end();
        }

        if ($nameQuery != null) {
            $this->db->where("vacation_homes.name LIKE '%".$nameQuery."%'");
        }

        if ($guestQuery != null) {
            $this->db->like('vacation_homes.sleeps', $guestQuery);
        }

        $query = $this->db->get();
        return $query->result();
    }
}