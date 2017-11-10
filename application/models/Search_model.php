<?php
class Search_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function search()
    {
        $query = $this->db->get('vacation_homes');

        return $query->result_array();
    }
}