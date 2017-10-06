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
    	$this->load->view('templates/header;');
    	$this->load->view('vacation_homes');
    }
}