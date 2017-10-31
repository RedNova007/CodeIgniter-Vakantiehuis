<?php
class Welcome_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_vacation_homes()
    {
        //'SELECT * FROM vacation_homes ORDER BY rand() LIMIT 4'
        $this->db->order_by('rand()');
        $query = $this->db->get('vacation_homes', 4);

        return $query->result_array();
    }   

    public function get_homepage_picture()
    {
        //'SELECT * FROM homepage_pictures ORDER BY rand() LIMIT 1'
        $this->db->order_by('rand()');
        $query = $this->db->get('homepage_pictures', 1);

        return $query->row_array();
    }
}