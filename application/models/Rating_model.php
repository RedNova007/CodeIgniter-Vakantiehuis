<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rating_model extends CI_Model {

    function __construct() {
        $this->vacation_homesTBL = 'vacationhome_ratings';
    }
 
    public function insert($data = array()) {

        //insert user data to reviews table
        $insert = $this->db->insert($this->vacation_homesTBL, $data);

        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function get_vacationhome_info($homeId){

        $where = $this->db->where('id', $homeId);
        $query = $this->db->get('vacation_homes');  
        
        return $query->row_array();
     }
 
    public function get_vacationhome_review($homeId){

            $where = $this->db->where('home_id', $homeId);
            $query = $this->db->get('vacationhome_ratings');
            $result = $query->result_array();
            return $result;
    }
}