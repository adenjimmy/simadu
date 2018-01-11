<?php
Class Koreksi extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
		$this->load->helper('fungsidate');
        $this->load->model('model_koreksi');
        $this->load->library(array('template','pagination','form_validation'));
    }
        
    function index(){
        $isi['judul']    = 'Referensi';
        $isi['subjudul'] = 'Koreksi'; 
        $isi['koreksi']     = $this->model_koreksi->tampilkan();
        $this->template->utama('pengaturan/view_koreksi',$isi);
        
       }
	       
       function tambah(){
       	$userid = $this->session->userdata("username");
        $data = array(          
            'dien030_01' => $this->input->post('kd'),
            'dien030_02' => $this->input->post('kd1')               
        );
        $this->model_koreksi->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit($id){
		$data = $this->model_koreksi->get($id);
		echo json_encode($data);
	}
                
    function update(){
         $data = array(
            'dien030_01' => $this->input->post('kd'),
            'dien030_02' => $this->input->post('kd1') 
        );
       $this->model_koreksi->update(array('dien030_01' => $this->input->post('kd')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete($id){
	$this->model_koreksi->delete_id($id);
	echo json_encode(array("status" => TRUE));
    }
	
	//<------------------ Koreksi Rinci ------------------------->
	function Rinci(){
        $isi['judul']    = 'Koreksi';
        $isi['subjudul'] = 'Rinci'; 
        $isi['rinci']     = $this->model_koreksi->tampilkeun();
        $this->template->utama('pengaturan/view_rinci',$isi);        
       }
	
	 function tambah_rinci(){       	
        $data = array(          
            'dien030_01' => $this->input->post('kd'),
            'dien031_01' => $this->input->post('kd1'),
            'dien031_02'=>  $this->input->post('kd2'),
			'dien031_03'=>  $this->input->post('kd3')			 
        );
        $this->model_koreksi->tambah_rinci($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit_rinci($id){
		$data = $this->model_koreksi->get_rinci($id);
		echo json_encode($data);
	}
                
    function update_rinci(){
         $data = array(
            'dien030_01' => $this->input->post('kd'),
            'dien031_01' => $this->input->post('kd1'),
            'dien031_02'=>  $this->input->post('kd2'),
			'dien031_03'=>  $this->input->post('kd3')
        );
       $this->model_koreksi->update_rinci(array('id' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete_rinci($id){
	$this->model_koreksi->delete_rinci($id);
	echo json_encode(array("status" => TRUE));
    }
	
	//<------------------ Koreksi User ------------------------->
	function user(){
        $isi['judul']    = 'Koreksi Registrasi';
        $isi['subjudul'] = 'Pengguna'; 
        $isi['reg']     = $this->model_koreksi->tampil_user();
        $this->template->utama('pengaturan/view_register',$isi);        
       }
	
	 function tambah_user(){       	
        $data = array(           
            'dien031_01' => $this->input->post('kd1'),
            'dien032_01'=>  $this->input->post('kd2'),
			'dien032_02'=>  $this->input->post('kd3'),
			'dien032_03'=>  $this->input->post('kd4'),
			'dien032_04'=>  $this->input->post('kd5'),
			'dien032_05'=>  $this->input->post('kd6'),
			'dien032_06'=>  $this->input->post('kd7'),
			'dien032_07'=>  $this->input->post('kd8')			 
        );
        $this->model_koreksi->tambah_user($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit_user($id){
		$data = $this->model_koreksi->get_user($id);
		echo json_encode($data);
	}
                
    function update_user(){
         $data = array(
            'dien031_01' => $this->input->post('kd1'),
            'dien032_01'=>  $this->input->post('kd2'),
			'dien032_02'=>  $this->input->post('kd3'),
			'dien032_03'=>  $this->input->post('kd4'),
			'dien032_04'=>  $this->input->post('kd5'),
			'dien032_05'=>  $this->input->post('kd6'),
			'dien032_06'=>  $this->input->post('kd7'),
			'dien032_07'=>  $this->input->post('kd8')	
        );
       $this->model_koreksi->update_user(array('id' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete_user($id){
	$this->model_koreksi->delete_user($id);
	echo json_encode(array("status" => TRUE));
    }
	
}