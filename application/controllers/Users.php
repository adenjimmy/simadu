<?php
Class Users extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
		$this->load->helper('fungsidate');
        $this->load->model('model_user');
        $this->load->library(array('template','pagination','form_validation'));
    }
        
    function index(){
        $isi['judul']    = 'Managemen';
        $isi['subjudul'] = 'User'; 
        $isi['user']     = $this->model_user->tampilkan();
        $this->template->utama('pengaturan/view_user',$isi);
        
       }
	
    function log(){
        $isi['judul']    = 'Log Aktifitas';
        $isi['subjudul'] = 'User'; 
        $isi['log']     = $this->model_user->tampil();
        $this->template->utama('pengaturan/view_loguser',$isi);
        
       }
       
       function tambah(){
       	$userid = $this->session->userdata("username");
        $data = array(          
            'dien025_01' => $this->input->post('kd'),
            'dien025_02' => $this->input->post('kd1'),
            'dien025_03'=>  $this->input->post('kd2'),
			'dien025_04'=>  $this->input->post('kd3'),
			'dien025_05'=>  md5($this->input->post('kd4')),
			'dien025_06'=>  $this->input->post('kd5'),
			'dien025_07'=>  $userid,
			'dien025_08'=>  date('Y-m-d'),   
        );
        $this->model_user->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit($id){
		$data = $this->model_user->get($id);
		echo json_encode($data);
	}
                
    function update(){
         $data = array(
            'dien025_01' => $this->input->post('kd'),
            'dien025_02' => $this->input->post('kd1'),
            'dien025_03'=>  $this->input->post('kd2'),
			'dien025_04'=>  $this->input->post('kd3'),
			'dien025_05'=>  md5($this->input->post('kd4')),
			'dien025_06'=>  $this->input->post('kd5'),
        );
       $this->model_user->update(array('id' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete($id){
	$this->model_user->delete_id($id);
	echo json_encode(array("status" => TRUE));
    }
	
	//<------------------ User group ------------------------->
	function group(){
        $isi['judul']    = 'Managemen';
        $isi['subjudul'] = 'User Group'; 
        $isi['group']     = $this->model_user->tampilkeun();
        $this->template->utama('pengaturan/view_group',$isi);        
       }
	
	 function tambah_group(){       	
        $data = array(          
            'dien026_01' => $this->input->post('kd'),
            'dien026_02' => $this->input->post('kd1'),
            'dien026_03'=>  $this->input->post('kd2'),			 
        );
        $this->model_user->tambah_group($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit_group($id){
		$data = $this->model_user->get_group($id);
		echo json_encode($data);
	}
                
    function update_group(){
         $data = array(
            'dien026_01' => $this->input->post('kd'),
            'dien026_02' => $this->input->post('kd1'),
            'dien026_03'=>  $this->input->post('kd2'),
        );
       $this->model_user->update_group(array('dien026_01' => $this->input->post('kd')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete_group($id){
	$this->model_user->delete_group($id);
	echo json_encode(array("status" => TRUE));
    }
	
	//<------------------ Ottoritas group ------------------------->
	function otto(){
        $isi['judul']    = 'Otoritas';
        $isi['subjudul'] = 'User Group'; 
        $isi['otto']     = $this->model_user->tampilkin();
        $this->template->utama('pengaturan/view_otto',$isi);        
       }
	
	 function tambah_otto(){       	
        $data = array(          
            'dien027_01' => $this->input->post('kod'),
            'dien027_02' => $this->input->post('kod1'),
            'dien027_03'=>  $this->input->post('kod2'),
            'dien027_04'=>  $this->input->post('kod3'),			 
        );
        $this->model_user->tambah_otto($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit_otto($id){
		$data = $this->model_user->get_otto($id);
		echo json_encode($data);
	}
                
    function update_otto(){
         $data = array(
            'dien027_01' => $this->input->post('kod'),
            'dien027_02' => $this->input->post('kod1'),
            'dien027_03'=>  $this->input->post('kod2'),
            'dien027_04'=>  $this->input->post('kod3'),	
        );
       $this->model_user->update_otto(array('id' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete_otto($id){
	$this->model_user->delete_otto($id);
	echo json_encode(array("status" => TRUE));
    }
	
	//<------------------ Ottoritas User ------------------------->
	function oto(){
        $isi['judul']    = 'Otoritas';
        $isi['subjudul'] = 'User '; 
        $isi['oto']     = $this->model_user->tampilan();
        $this->template->utama('pengaturan/view_oto',$isi);        
       }
	
	 function tambah_oto(){       	
        $data = array(          
            'dien028_01' => $this->input->post('oto'),
            'dien028_02' => $this->input->post('oto1'),
            'dien028_03'=>  $this->input->post('oto2'),
            'dien028_04'=>  $this->input->post('oto3'),			 
        );
        $this->model_user->tambah_oto($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit_oto($id){
		$data = $this->model_user->get_oto($id);
		echo json_encode($data);
	}
                
    function update_oto(){
         $data = array(
            'dien028_01' => $this->input->post('oto'),
            'dien028_02' => $this->input->post('oto1'),
            'dien028_03'=>  $this->input->post('oto2'),
            'dien028_04'=>  $this->input->post('oto3'),	
        );
       $this->model_user->update_oto(array('id' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete_oto($id){
	$this->model_user->delete_oto($id);
	echo json_encode(array("status" => TRUE));
    }
	
	//<------------------ User Sub Unit------------------------->
	function sub_unit(){
        $isi['judul']    = 'Sub Unit';
        $isi['subjudul'] = 'User '; 
        $isi['sub']     = $this->model_user->tampil_sub();
        $this->template->utama('pengaturan/view_suboto',$isi);        
       }
	
	 function tambah_sub(){       	
        $data = array(          
            'dien029_01' => $this->input->post('sub'),
            'dien029_02' => $this->input->post('sub1'),
            'dien029_03'=>  $this->input->post('sub2'),
            'dien029_04'=>  $this->input->post('sub3'),
			'dien029_05'=>  $this->input->post('sub4'),
			'dien029_06'=>  $this->input->post('sub5'),
			'dien029_07'=>  $this->input->post('sub6'),			 
        );
        $this->model_user->tambah_sub($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit_sub($id){
		$data = $this->model_user->get_sub($id);
		echo json_encode($data);
	}
                
    function update_sub(){
         $data = array(
            'dien029_01' => $this->input->post('sub'),
            'dien029_02' => $this->input->post('sub1'),
            'dien029_03'=>  $this->input->post('sub2'),
            'dien029_04'=>  $this->input->post('sub3'),
			'dien029_05'=>  $this->input->post('sub4'),
			'dien029_06'=>  $this->input->post('sub5'),
			'dien029_07'=>  $this->input->post('sub6'),		
        );
       $this->model_user->update_sub(array('id' => $this->input->post('id')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete_sub($id){
	$this->model_user->delete_sub($id);
	echo json_encode(array("status" => TRUE));
    }
}