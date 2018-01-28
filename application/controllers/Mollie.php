<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mollie extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mollie_model');
    }

    public function payment()
    {
    	$this->load->view('mollie/new_payment');
    }

    public function webhook()
    {
    	$this->load->view('mollie/webhook_verification');
    }
}