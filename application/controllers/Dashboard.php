<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
     function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('template','pagination','form_validation','upload'));
        
    }

	public function index(){
            $isi['judul']    = 'Dashboard';
            $isi['subjudul'] = ''; 
            $this->template->utama('dashboard',$isi);
		
	}
}
