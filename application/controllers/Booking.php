<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Booking extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Booking_model');
    }

    public function index() 
    {
                $data = array();
                $bookingData = array();
                if($this->input->post('bookingSubmit')){
                	$this->form_validation->set_rules('booking_name', 'Name', 'required');

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
                            redirect('booking/Succes');
                        }else{
                            $data['error_msg'] = 'Some problems occured, please try again.';
                        }
                    }
                }
                $data['Booking'] = $bookingData;
                //load the view
                $this->load->view('booking/Booking_Form', $data);         

   
        
    }


    public function succes()
    {
        $this->load->view('booking/Booking_Succes');

    }   

}