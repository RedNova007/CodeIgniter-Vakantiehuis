<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Vakantiehuis extends CI_Controller
{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Vakantiehuisje');
        
    }

    public function register()
    {
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
            );

            if($this->form_validation->run() == true){
                $insert = $this->Vakantiehuisje->insert($vacation_homesData);
                if($insert){
                    redirect('welcome/index');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['Vakantiehuisje'] = $vacation_homesData;
        //load the view
        $this->load->view('Vakantiehuis/Register_Vakantiehuis', $data);    	


    }

    public function edit()
    {
    	$this->load->view('Vakantiehuis/Edit_Vakantiehuis');    
    }
}