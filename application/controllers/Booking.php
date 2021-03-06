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

            if($this->session->userdata('isUserLoggedIn')){

                if($this->input->post('bookingSubmit')){
                    $this->form_validation->set_rules('vacation_home_id', 'ID', 'required|is_natural_no_zero|numeric');
                	$this->form_validation->set_rules('booking_name', 'Name', 'required');
                    $this->form_validation->set_rules('booking_email', 'Email', 'required|valid_email');
                    $this->form_validation->set_rules('booking_guests', 'Guests', 'required|is_natural_no_zero|numeric');
                    $this->form_validation->set_rules('arrival', 'Arrival', 'required');
                    $this->form_validation->set_rules('departure', 'Departure', 'required');
                    $this->form_validation->set_rules('booking_pickup', 'Pickup', 'required');




                    $bookingData = array(
                        'vacation_home_id' => strip_tags($this->input->post('vacation_home_id')),
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
                $this->load->view('_templates/header');
                $this->load->view('booking/Booking_Form', $data);
            }else{
            redirect('users/login');
        }
    }


    public function succes()
    {
        $this->load->view('booking/Booking_Succes');

    }   

}