<?php  Class Saldo extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
		$this->load->helper('url');
        $this->load->model('model_saldo');
        $this->load->library(array('template','pagination','form_validation','upload'));
    }
        
    function index(){
        $isi['judul']    = 'Saldo Awal';
        $isi['subjudul'] = 'Urusan'; 
		$isi['urusan']= $this->model_saldo->ambil_urusan();
        $isi['saldo']     = $this->model_saldo->tampilkan();
        $this->template->utama('umum/view_saldo',$isi);
        
       } 	
	
      function tambah(){
        $data = array(            
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kd'),
            'dien004_01' => $this->input->post('kd1'),
            'dien005_01' => $this->input->post('kd2'),
            'dien019_01' => $this->input->post('kd3'),
            'dien035_01' => $this->input->post('kd4'),
            'dien035_02' => $this->input->post('kd5'),
			'dien035_03' => $this->input->post('kd6'),
			'dien035_04' => $this->input->post('kd7'),
			'dien014_01' => $this->input->post('kd8'),   
        );
        $this->model_saldo->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_saldo->get_id($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
           'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kd'),
            'dien004_01' => $this->input->post('kd1'),
            'dien005_01' => $this->input->post('kd2'),
            'dien019_01' => $this->input->post('kd3'),
            'dien035_01' => $this->input->post('kd4'),
            'dien035_02' => $this->input->post('kd5'),
			'dien035_03' => $this->input->post('kd6'),
			'dien035_04' => $this->input->post('kd7'),
			'dien014_01' => $this->input->post('kd8'),               
        );
        $this->model_saldo->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		$this->model_saldo->delete_id($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	// dijalankan saat urusan di klik
	function pilih_bidang(){
		$data['bidang']=$this->model_saldo->ambil_bidang($this->uri->segment(3));
		$this->load->view('umum/v_drop_down_bidang',$data);
	}
	
	// dijalankan saat Bidang di klik
	function pilih_unit(){
		$data['unit']=$this->model_saldo->ambil_unit($this->uri->segment(3));
		$this->load->view('umum/v_drop_down_unit',$data);
	}
	
	// dijalankan saat Unit di klik
	function pilih_subunit(){
		$data['subunit']=$this->model_saldo->ambil_sub($this->uri->segment(3));
		$this->load->view('umum/v_drop_down_sub',$data);
	}
	
	//<----- Bidang ------->
	function bidang(){
        $isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Bidang'; 
		$isi['kodeunik'] = $this->model_organisasi->buat_kode();
        $isi['urus']     = $this->model_organisasi->tampil_bid();
        $this->template->utama('organisasi/view_bidang',$isi);        
     }
			
	function tambah_bid(){
        $data = array(            
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien003_02' => $this->input->post('nama'),   
        );
        $this->model_organisasi->tambah_bid($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_bid($id){
		$data = $this->model_organisasi->get_bid($id);
		echo json_encode($data);
		}
	   
	   function update_bid(){
         $data = array(           
           'dien002_01' => $this->input->post('urus'),
           'dien003_01' => $this->input->post('bida'),
           'dien003_02' => $this->input->post('nama'),               
        );
        $this->model_organisasi->update_bid(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_bid($id){
		$this->model_organisasi->delete_bid($id);
		echo json_encode(array("status" => TRUE));
    }
	
}       
