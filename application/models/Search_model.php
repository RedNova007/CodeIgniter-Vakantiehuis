<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function search($nameQuery = null, $dateQuery = null, $dateQuery2 = null, $guestQuery = null)
    {
     //    $this->db->select('*');
     //    $this->db->from('vacation_homes');
     //    $this->db->like('name', $search);

     //    $query = $this->db->get();
    	// return $query->result();

        // SELECT * FROM booking INNER JOIN vacation_homes ON vacation_homes.id = booking.vacation_home_id

        // SELECT * FROM booking INNER JOIN vacation_homes ON vacation_homes.id = booking.vacation_home_id WHERE booking.arrival = '2017-12-15 00:00:00'
    // if(isset search + date) { 
        // $this->db->select('*');
        // $this->db->from('booking');
        // $this->db->join('vacation_homes', 'vacation_homes.id = booking.vacation_home_id', 'inner');
        // $this->db->where($search2,"BETWEEN booking.arrival AND booking.departure");
    // }
    // if (isset search) {
    //     $this->db->select('*');
    //     $this->db->from('vacation_homes');
    //     $this->db->like('name', $search);
    // }

        //SELECT * FROM booking WHERE arrival <= `2017-12-15 00:00:00` AND departure >= `2017-12-20 00:00:00`

        $this->db->distinct();
        $this->db->select('vacation_homes.
        *');
        $this->db->from('booking');
        $this->db->join('vacation_homes', 'vacation_homes.id = booking.vacation_home_id', 'inner');

        //$this->db->where("arrival >=" $dateQuery "AND departure <=" $dateQuery2");

        var_dump($nameQuery);

        if ($nameQuery != null) {
            $this->db->like('vacation_homes.name', $nameQuery);
            var_dump($nameQuery);
        }

        if ($dateQuery != null && $dateQuery2 != null) {
            //$this->db->where("arrival <=", $dateQuery);
            //$this->db->where("departure >=", $dateQuery2);

            $sql = "SELECT * FROM vacation_homes WHERE id NOT IN(SELECT vacation_homes.id FROM vacation_homes JOIN booking ON vacation_homes.id = booking.vacation_home_id WHERE (arrival <= ? AND departure >= ?) OR (arrival BETWEEN ? AND ?))";
            $this->db->query($sql, array($dateQuery, $dateQuery2, $dateQuery, $dateQuery2));

            //WHERE NOT (arrival > $dateQuery2 OR departure < $dateQuery)
        }

        if ($guestQuery != null) {
            $this->db->like('vacation_homes.sleeps', $guestQuery);
        }

        $query = $this->db->get(); 
        return $query->result();
    }
}