<?php 

 class Users_c extends CI_Controller
{


    public function index()
    {
        if ($this->session->userdata('level')!="Users") {
            redirect('login/index');
        }
        $data = array(
            'username' => $this->session->userdata('username'),
            'nama' => $this->session->userdata('nama')

        );
        $this->load->view('Home', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('login/index'));
    }

}
?>