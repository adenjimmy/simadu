<?php  Class Penyimpanan extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->model('model_penyimpanan');
        $this->load->library(array('template','pagination','form_validation'));
    }
        
    function index(){
        $isi['judul']    = 'Penyimpanan';
        $isi['subjudul'] = 'Data'; 
		$isi['kodeunik'] = $this->model_penyimpanan->buat();
		$isi['urusan']= $this->model_penyimpanan->ambil_urusan();
        $isi['simpan']     = $this->model_penyimpanan->tampilkan();
		$isi['petugas']     = $this->model_penyimpanan->tampilkeun();
        $this->template->utama('penyimpanan/index',$isi);        
       } 
	
	
      function tambah(){
        $data = array(            
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kod'),
            'dien004_01' => $this->input->post('kode'),
            'dien005_01' => $this->input->post('kode1'),
            'dien019_01' => $this->input->post('kode2'),
            'dien019_02' => $this->input->post('kode3'),
            'dien019_03' => $this->input->post('kode4'),              
        );
        $this->model_penyimpanan->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_penyimpanan->get($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kod'),
            'dien004_01' => $this->input->post('kode'),
            'dien005_01' => $this->input->post('kode1'),
            'dien019_01' => $this->input->post('kode2'),
            'dien019_02' => $this->input->post('kode3'),
            'dien019_03' => $this->input->post('kode4'),              
        );
        $this->model_penyimpanan->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		$this->model_penyimpanan->delete($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	// dijalankan saat urusan di klik
	function pilih_bidang(){
		$data['bidang']=$this->model_penyimpanan->ambil_bidang($this->uri->segment(3));
		$this->load->view('penyimpanan/v_drop_down_bidang',$data);
	}
	
	// dijalankan saat Bidang di klik
	function pilih_unit(){
		$data['unit']=$this->model_penyimpanan->ambil_unit($this->uri->segment(3));
		$this->load->view('penyimpanan/v_drop_down_unit',$data);
	}

	// dijalankan saat Unit di klik
	function pilih_subunit(){
		$data['subunit']=$this->model_penyimpanan->ambil_sub($this->uri->segment(3));
		$this->load->view('penyimpanan/v_drop_down_sub',$data);
	}
	
	//<----- Petugas ------->
	function petugas(){
        $isi['judul']    = 'Penyimpanan';
        $isi['subjudul'] = 'Petugas';  
		$isi['kodeunik'] = $this->model_penyimpanan->buatin();
		$isi['urusan']= $this->model_penyimpanan->ambil_urusan();     
		$isi['petugas']     = $this->model_penyimpanan->tampilkeun();
        $this->template->utama('penyimpanan/petugas',$isi);
        
       } 
	
	 function tambah1(){
        $data = array(            
            'dien001_01' => $this->input->post('thn1'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kd'),
            'dien004_01' => $this->input->post('kd1'),
            'dien005_01' => $this->input->post('kd2'),
            'dien019_01' => $this->input->post('kd3'),
            'dien020_01' => $this->input->post('kd4'),
            'dien020_02' => $this->input->post('kd5'),
			'dien020_03' => $this->input->post('kd6'),
			'dien020_04' => $this->input->post('kd7'),              
        );
        $this->model_penyimpanan->tambah1($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit1($id){
		$data = $this->model_penyimpanan->get1($id);
		echo json_encode($data);
		}
	   
	   function update1(){
         $data = array(           
            'dien001_01' => $this->input->post('thn1'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kd'),
            'dien004_01' => $this->input->post('kd1'),
            'dien005_01' => $this->input->post('kd2'),
            'dien019_01' => $this->input->post('kd3'),
            'dien020_01' => $this->input->post('kd4'),
            'dien020_02' => $this->input->post('kd5'),
			'dien020_03' => $this->input->post('kd6'),
			'dien020_04' => $this->input->post('kd7'),              
        );
        $this->model_penyimpanan->update1(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete1($id){
		$this->model_penyimpanan->delete1($id);
		echo json_encode(array("status" => TRUE));
    }    
}       
