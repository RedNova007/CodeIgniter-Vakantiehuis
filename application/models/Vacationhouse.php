<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Vacationhouse extends CI_Model{
    function __construct() {
        $this->vacation_homesTBL = 'vacation_homes';
    }


    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->vacation_homesTBL);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
    		foreach ($params['conditions'] as $key => $value) {
    			$this->db->where($key,$value);
    		}
    	}

        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    } 

    public function insert($data = array()) {
        //add created and modified data if not included
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        $data['owner_id'] = $this->session->userdata('userId');

        //insert user data to users table
        $insert = $this->db->insert($this->vacation_homesTBL, $data);
        
        //return the status
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function get_vacation_homes()
    {
        $query = $this->db->get('vacation_homes');

        return $query->result_array();
    }

    public function get_owner_vaction_home($data = array())
    {
        
        $userId = $this->session->userdata('userId');   
        $where = $this->db->where('owner_id', $userId);
        $query = $this->db->get('vacation_homes');
        $result = $query->row_array();
        
        
        return $result;
    }
}