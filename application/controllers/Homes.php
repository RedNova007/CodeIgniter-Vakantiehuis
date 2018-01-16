<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Homes_model');
    }

    public function index()  
    {
    	$data = array();

		$data['vacation_homes'] = $this->Homes_model->get_vacation_homes();

    	$this->load->view('_templates/header');
    	$this->load->view('homes/vacation_homes', $data);
    }

    public function houseOverview()
    {
        $data = array();
        $homeId = $_GET ['id'];
        $data['vacationhouse'] = $this->Homes_model->get_vacationhome_info($homeId);
        $data['images'] = $this->Homes_model->get_vacationhome_images($homeId);
<<<<<<< HEAD
        $this->load->view('_templates/header');
=======
        $data['images'] = $this->Homes_model->get_vacationhome_images($homeId);
        // var_dump($data['images']); 
>>>>>>> c278d9aea25789e564120b43708e85eb03e3948d
        $this->load->view('homes/home', $data);
    }
}