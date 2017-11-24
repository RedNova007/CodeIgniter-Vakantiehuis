<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('search_model');
    }

     public function results() 
    {
    	$data = array();

    	$search = $this->input->post('query');

        $data['search'] =  $this->search_model->search($search);

    	$this->load->view('_templates/header');
    	$this->load->view('search/results', $data);
    }
}