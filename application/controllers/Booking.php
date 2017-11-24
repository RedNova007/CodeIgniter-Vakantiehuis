<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Booking_model');
    }

    public function index() 
    {
        $this->load->view('booking/Booking_Form.php');    

    }
}