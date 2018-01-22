<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* @property rating_model $rating_model */

class Rating extends CI_Controller
{
    function __construct()
    {
        parent::__construct();;
        $this->load->library('form_validation');
        $this->load->model('rating_model');
    }

    public function score()
    {
        if ($this->session->userdata('isUserLoggedIn')) {

            $data = array();
            $vacationhome_review = array();
            if($this->input->post('homeReviewSubmit')){
                $vacationhome_review = array(
                    'home_id' => strip_tags($this->input->post('id')),
                    'description' => strip_tags($this->input->post('description')),
                    'stars'=> strip_tags($this->input->post('stars')),
                );
                $insert = $this->rating_model->insert($vacationhome_review);
                if($insert){
                    redirect('Users/account');
                }
                else{
                    $data['error_msg'] =  'Some problems occured, please try again.';
                }

            }
            
            $data['vacationhouse'] = $vacationhome_review;
            $this->load->view('ratings/ratings', $data);
        }
        else{
            redirect('Users/account');
        }
       
    }


}