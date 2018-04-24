<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_event extends CI_Controller {
        public function index()
        {
        		
                $this->load->view('create_event');
        }
}