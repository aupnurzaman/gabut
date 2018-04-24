
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Login_model');
        }

     

        public function index()
        {
        	if ($this->session->userdata('level')=="Admin") {
        		# code...
        		redirect('Admin_C/index');
        	}
        	else if($this->session->userdata('level')=="Users") {
        		redirect('Users_C/index');
        	}
                $this->load->view('Login');
        	
        }
        public function cek_login()
        {
        	$username = $this->input->post('username');
        	$password = $this->input->post('password');

        	$this->load->model('login_model');
        	// $login_admin = $this->login_model->login_admin($username, $password);
        	$login_users = $this->login_model->login_users($username, $password);


        	// kondisi ketika login admin dan users
        	if ($login_admin) {

            $sess_data = array(
                'logged_in' => "Sudah Login",
                'username' => $login_admin->username,
                'nama' => $login_admin->nama,
                'level' => "Admin"
            );
            $this->session->set_userdata($sess_data);


            redirect('Admin_c/index');

      		 }elseif ($login_users) {
                if ($login_users->num_rows()==0) {                    
                   redirect('Login/index');  
                }else {                   
                    $sess_data = array(
                    'logged_in' => "Sudah Login",
                    'username' => $login_users->username,
                    'nama' => $login_users->nama,
                    'level' => "Users"
                    );
                    $this->session->set_userdata($sess_data);



                    redirect('Home/index');
                }
      		 	


       		 }
        }
        // public function register()
        // {
        //                 $nama = $this->input->post('nama');
        //                 $email = $this->input->post('email');
        //                 $username = $this->input->post('username');
        //                 $password = $this->input->post('password');
        //                 $data = array(
        //                         'nama' => $nama,
        //                         'email' => $email,
        //                         'username' => $username,
        //                         'password' => $password
        //                         );
        //                 $this->Register_model->input_data($data,'konsumen');
        //                 redirect('Home/index');
        // }
        
}