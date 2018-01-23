<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*  
*/
class HouseOverview extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('vacationhouse');
         
    }

    public function register()
    {

        if($this->session->userdata('isUserLoggedIn')){

            $role = $this->session->get_userdata('role');
            
            if($role['role'] == 'Owner'){
            
                $data = array();
                $vacation_homesData = array();
                if($this->input->post('regisHomeSubmit')){
                    $this->form_validation->set_rules('name', 'Name', 'required');

                    $vacation_homesData = array(
                        'name' => strip_tags($this->input->post('name')),
                        'description' => strip_tags($this->input->post('description')),
                        'price_per_night' => strip_tags($this->input->post('price_per_night')),
                        'price_per_week' => strip_tags($this->input->post('price_per_week')),
                        'pets_allowed' => strip_tags($this->input->post('pets_allowed')),
                        'damage_deposit' => strip_tags($this->input->post('damage_deposit')),
                        'minimum_stay' => strip_tags($this->input->post('minimum_stay')),
                        'country_id' => strip_tags($this->input->post('country_id')),
                        'bedrooms' => strip_tags($this->input->post('bedrooms')),
                        'bathrooms' => strip_tags($this->input->post('bathrooms')),
                        'sleeps' => strip_tags($this->input->post('sleeps')),
                    );

                    if($this->form_validation->run() == true){
                        $insert = $this->vacationhouse->insert($vacation_homesData);
                        if($insert){
                            redirect('');
                        }else{
                            $data['error_msg'] = 'Some problems occured, please try again.';
                        }
                    }
                }
                $data['Vacationhouse'] = $vacation_homesData;
                //load the view
                $this->load->view('houseOverview/register_vacationhouse', $data);    

            }

            else{
                 redirect('Users/login');
            }
        }

        else{
            redirect('Users/login');
        }
        
    }

    public function edit()
    {

    	$this->load->view('HouseOverview/edit_vacationhouse');    
    }

    public function house()
    {
         if($this->session->userdata('isUserLoggedIn')){

            $role = $this->session->get_userdata('role');
            
            if($role['role'] == 'Owner'){
                $data = array();
                $data['vacationhouse'] = $this->vacationhouse->get_owner_vaction_home();
                $this->load->view('houseOverview/vacationhouse', $data);   
            }
        }

        else{
            redirect('Users/login');
        }
        

    }

    public function succes()
    {
        $this->load->view('Succes/succes');
    }


}