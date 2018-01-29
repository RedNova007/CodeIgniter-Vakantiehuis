<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('_templates/header');
            $this->load->view('users/account', $data);
        }else{
            redirect('users/login');
        }
    }
    /*
     * User login
     */
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'status' => '1'
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('role', $checkLogin['role']);
                    redirect('');
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('_templates/header');
        $this->load->view('users/login', $data);  
        
    }
    
    /*
     * User registration
     */
    public function registration(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required|alpha');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric|min_length[8]|max_length[30]');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');
            $this->form_validation->set_rules('role', 'Role', 'required');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'gender' => $this->input->post('gender'),
                'phone' => strip_tags($this->input->post('phone')),
                'role' =>  strip_tags($this->input->post('role'))
            );

            // $rules = array(
            //     [
            //         'field' => 'password',
            //         'label' => 'Password',
            //         'rules' => 'callback_valid_password',
            //     ],
            //     [
            //         'field' => 'repeat_password',
            //         'label' => 'Repeat Password',
            //         'rules' => 'matches[password]',
            //     ],
            // );
            // $this->form_validation->set_rules($rules);

            if($this->form_validation->run() == true){
                $insert = $this->user->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('index.php/users/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        //load the view
        $this->load->view('_templates/header');
        $this->load->view('users/registration', $data);
    }
    
    //   public function valid_password($password = '')
    // {
    //     $password = trim($password);
    //     $regex_lowercase = '/[a-z]/';
    //     $regex_uppercase = '/[A-Z]/';
    //     $regex_number = '/[0-9]/';
    //     $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';

    //     if (empty($password))
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field is required.');
    //         return FALSE;
    //     }
    //     if (preg_match_all($regex_lowercase, $password) < 1)
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
    //         return FALSE;
    //     }
    //     if (preg_match_all($regex_uppercase, $password) < 1)
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
    //         return FALSE;
    //     }
    //     if (preg_match_all($regex_number, $password) < 1)
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
    //         return FALSE;
    //     }
    //     if (preg_match_all($regex_special, $password) < 1)
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
    //         return FALSE;
    //     }
    //     if (strlen($password) < 5)
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
    //         return FALSE;
    //     }
    //     if (strlen($password) > 32)
    //     {
    //         $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
    //         return FALSE;
    //     }
    //     return TRUE;
    // }
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('users/login/');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
  
}
