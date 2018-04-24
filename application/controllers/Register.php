<?php

class Register extends CI_Controller {

        function __construct(){
        parent::__construct();		
		$this->load->model('Register_model');
		$this->load->helper('url');
        }
 
        function index(){
                $this->load->view('register');
        }
        
 
        function register(){
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = array(
                    'nama' => $nama,
                    'email' => $email,
                    'username' => $username,
                    'password' => $password
                    );
            $this->Register_model->input_data($data,'konsumen');
            redirect('Home/index');
        }
}