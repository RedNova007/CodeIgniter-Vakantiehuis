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

    public function houseOverview($id)
    {
        $data = array();

        $data['vacationhouse'] = $this->Homes_model->get_vacationhome_info($id);
        $data['vacationhouse_img'] = $this->Homes_model->get_vacationhome_images($id);


        $this->load->view('homes/home', $data);
    }
}