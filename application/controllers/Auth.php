<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model','auth');
    }
    public function login()
    {
        $this->form_validation->set_rules('username','username', 'required');
        $this->form_validation->set_rules('password','password', 'required');
        if($this->form_validation->run() == FALSE) 
        {
            $this->load->view('auth/login');
        } else {
            if($this->auth->login())
            {
                $this->session->set_userdata('message', "Account Logged In Successfully");
                redirect('account/login_success');
            } else {
                $this->session->set_userdata('message', "Unable to create an account");
                redirect('auth/login');
            }
        }
    }

    public function register()
    {
        
        $this->form_validation->set_rules('firstname','First Name', 'required');
        $this->form_validation->set_rules('lastname','Last Name', 'required');
        $this->form_validation->set_rules('username','username', 'required');
        $this->form_validation->set_rules('password','password', 'required');
        if($this->form_validation->run() == FALSE) 
        {
            $this->load->view('auth/register');
        } else {
            if($this->auth->register())
            {
                $this->session->set_userdata('message', "Account Created Successfully");
                redirect('account/register_success');
            } else {
                $this->session->set_userdata('message', "Unable to create an account");
                redirect('auth/register');
            }
        }
    }

    public function forgot_password()
    {

    }

    public function reset_password()
    {

    }
}