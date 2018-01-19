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
}