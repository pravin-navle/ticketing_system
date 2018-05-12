<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register_success()
    {
        $this->load->view('account/register_success');
    }

    public function login_success()
    {
        $this->load->view('account/login_success');
    }

    public function dashboard()
    {
        $this->load->view('account/dashboard');
    }
}