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
}