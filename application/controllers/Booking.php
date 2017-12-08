<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Booking_model');
    }

    public function index() 
    {
		if($this->session->userdata('isUserLoggedIn')){

            
            
           
            
                $data = array();
                $bookingData = array();
                if($this->input->post('regisHomeSubmit')){
                	$this->form_validation->set_rules('name', 'Name', 'required');

                    $bookingData = array(
                        'booking_name' => strip_tags($this->input->post('booking_name')),
                        'booking_email' => strip_tags($this->input->post('booking_email')),
                        'booking_guests' => strip_tags($this->input->post('booking_guests')),
                        'arrival' => strip_tags($this->input->post('arrival')),
                        'departure' => strip_tags($this->input->post('departure')),
                        'booking_pickup' => strip_tags($this->input->post('booking_pickup')),
                        'booking_requests' => strip_tags($this->input->post('booking_requests')),
                        

                    );

                    if($this->form_validation->run() == true){
                        $insert = $this->Booking_model->insert($bookingData);
                        if($insert){
                            redirect('booking/succes');
                        }else{
                            $data['error_msg'] = 'Some problems occured, please try again.';
                        }
                    }
                }
                $data['Booking_model'] = $bookingData;
                //load the view
                $this->load->view('booking/Booking_Form', $data);    

            }

            else{
                 $this->load->view('Errors/index.html');
            }
        

   
        
    } 
}