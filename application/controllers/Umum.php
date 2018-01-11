<?php
Class Umum extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->model('model_umum');
        $this->load->library(array('template','pagination','form_validation'));
    }
        
    function index(){
        $isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Unit'; 
		$isi['urusan']= $this->model_umum->ambil_urusan();
        $isi['data']     = $this->model_umum->tampilkan();
        $this->template->utama('umum/index',$isi);
        
       }
	
      function tambah(){
        $data = array(            
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kod'),
            'dien004_01' => $this->input->post('kode'),
            'dien005_01' => $this->input->post('kode1'),
            'dien017_01' => $this->input->post('nm'),
            'dien017_02' => $this->input->post('nip'),
            'dien017_03' => $this->input->post('jab'),
            'dien017_04' => $this->input->post('alm')               
        );
        $this->model_umum->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_umum->get($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kod'),
            'dien004_01' => $this->input->post('kode'),
            'dien005_01' => $this->input->post('kode1'),
            'dien017_01' => $this->input->post('nm'),
            'dien017_02' => $this->input->post('nip'),
            'dien017_03' => $this->input->post('jab'),
            'dien017_04' => $this->input->post('alm')              
        );
        $this->model_umum->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
    
    public function search($keyword)
	{
		$this->db->select('dien002.dien002_02,dien003.dien003_02,dien004.dien004_02,dien005.dien005_02');
		$this->db->join('dien002', 'dien002.dien002_01=dien004.dien002_01');
		$this->db->join('dien003', 'dien003.dien003_01=dien004.dien003_01');
		$this->db->join('dien005', 'dien005.dien004_01=dien004.dien004_01');
		$this->db->like('dien004_02', $keyword);
		$data = $this->db->get('dien004')->result();
		$arr = [];
		foreach ($data as $row) {
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
			'value'   => $row->dien004_02,
			'urusan'  => $row->dien002_02,
			'bidang'  => $row->dien003_02,
			'unit'    => $row->dien004_02,
			'subunit' => $row->dien005_02
			);
		}
		var_dump($arr);
		// echo json_encode($arr);
	}
        
    function delete($id){
		// $this->model_umum->delete_id($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat urusan di klik
	function pilih_bidang(){
		$data['bidang']=$this->model_umum->ambil_bidang($this->uri->segment(3));
		$this->load->view('umum/v_drop_down_bidang', $data);
	}
	
	// dijalankan saat Bidang di klik
	function pilih_unit(){
		$data['unit']=$this->model_umum->ambil_unit($this->uri->segment(3));
		$this->load->view('umum/v_drop_down_unit',$data);
	}
	
	// dijalankan saat Unit di klik
	function pilih_subunit(){
		$data['subunit']=$this->model_umum->ambil_sub($this->uri->segment(3));
		$this->load->view('umum/v_drop_down_sub',$data);
	}
	
	//<--------------- Umum Bidang----------------------->
	 function bidang(){
        $isi['judul']    = 'Bidang Organisasi';
        $isi['subjudul'] = 'Unit'; 
		$isi['kodeunik'] = $this->model_umum->buat_kode();
		$isi['urusan']= $this->model_umum->ambil_urusan();
        $isi['bid']     = $this->model_umum->tampilkeun();
        $this->template->utama('umum/view_bidang',$isi);        
       }   
	 
	   function tambah_bid(){
        $data = array(
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('kd'),
            'dien003_01' => $this->input->post('kd1'),
            'dien004_01' => $this->input->post('kd2'),
            'dien005_01' => $this->input->post('kd3'),
            'dien018_01' => $this->input->post('kd4'),
            'dien018_02' => $this->input->post('kd5'),
            'dien018_03' => $this->input->post('kd6'),
            'dien018_04' => $this->input->post('kd7'),
            'dien018_05' => $this->input->post('kd8'),  
        );
        $this->model_umum->tambah_bid($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit_bid($id){
		$data = $this->model_umum->get_bid($id);
		echo json_encode($data);
		}
	   
	   function update_bid(){
         $data = array(
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('kd'),
            'dien003_01' => $this->input->post('kd1'),
            'dien004_01' => $this->input->post('kd2'),
            'dien005_01' => $this->input->post('kd3'),
            'dien018_01' => $this->input->post('kd4'),
            'dien018_02' => $this->input->post('kd5'),
            'dien018_03' => $this->input->post('kd6'),
            'dien018_04' => $this->input->post('kd7'),
            'dien018_05' => $this->input->post('kd8'),              
        );
        $this->model_umum->update_bid(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_bid($id){
		$this->model_umum->delete_bid($id);
		echo json_encode(array("status" => TRUE));
    }
}       
