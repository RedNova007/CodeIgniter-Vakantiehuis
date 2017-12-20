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
        $guestQuery = $this->input->post('query4');

        $nameQuery = $this->security->xss_clean($nameQuery);
        $dateQuery = $this->security->xss_clean($dateQuery);
        $dateQuery2 = $this->security->xss_clean($dateQuery2);
        $guestQuery = (int)$guestQuery;


        var_dump($nameQuery);
        var_dump($dateQuery);
        var_dump($dateQuery2);
        var_dump($guestQuery);

        $data['searchResults'] = $this->search_model->search($nameQuery, $dateQuery, $dateQuery2, $guestQuery);

        $this->load->view('_templates/header');
        $this->load->view('search/results', $data);
    }
}