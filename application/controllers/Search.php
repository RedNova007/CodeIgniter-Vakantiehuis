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

    	$nameQuery = $this->input->post('query');
        $dateQuery = $this->input->post('query2');
        $dateQuery2 = $this->input->post('query3');

        //$data['search'] =  $this->search_model->search($search);
        //$data['dateQuery'] =  $this->search_model->search($dateQuery);
        //$data2['dateQuery2'] = $this->search_model->search($dateQuery2);

        //$data = array_merge($dateQuery, $dateQuery2);

        var_dump($nameQuery);
        var_dump($dateQuery);
        var_dump($dateQuery2);

        $data['searchResults'] = $this->search_model->search($nameQuery, $dateQuery, $dateQuery2);

    	$this->load->view('_templates/header');
    	$this->load->view('search/results', $data);
    }
}