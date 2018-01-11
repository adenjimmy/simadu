<?php  Class Organisasi extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
		$this->load->helper('url');
        $this->load->model('model_organisasi');
        $this->load->library(array('template','pagination','form_validation','upload'));
    }
        
    function index(){
        $isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Urusan'; 
        $isi['urus']     = $this->model_organisasi->tampilkan();
        $isi['message'] = $this->session->flashdata('message');
        $this->template->utama('organisasi/index',$isi);
        
       } 	
	
      function tambah(){
        $data = array(            
            'dien002_01' => $this->input->post('urus'),
            'dien002_02' => $this->input->post('nama'),   
        );
        $this->model_organisasi->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_organisasi->get_id($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
           'dien002_01' => $this->input->post('urus'),
           'dien002_02' => $this->input->post('nama'),              
        );
        $this->model_organisasi->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		if ((bool) $this->model_organisasi->tampil_bid($id))
    	{
    		echo json_encode(array('status' => false, 'message' => 'Tidak dapat menghapus, karena bidang sudah terisi'));
    		exit;
    	}
    	
		$this->session->set_flashdata('message', 'Bidang Telah dihapus');
		$this->model_organisasi->delete_bid($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	//<----- Bidang ------->
	function bidang($id){
        $isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Bidang'; 
		$isi['kodeunik'] = $this->model_organisasi->buat_kode();
        $isi['urus']     = $this->model_organisasi->tampil_bid($id);
        $isi['message'] = $this->session->flashdata('message');
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
    	if ($this->model_organisasi->ambil_bidang($id))
    	{
			echo json_encode(array('status' => false, 'message' => 'Tidak dapat menghapus, karena unit sudah terisi'));
			exit;
    	}
    	
		$this->session->set_flashdata('message', 'Bidang Telah dihapus');
		$this->model_organisasi->delete_bid($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	// dijalankan saat urusan di klik
	function pilih_bidang(){
		$data['bidang']=$this->model_organisasi->ambil_bidang($this->uri->segment(3));
		$this->load->view('organisasi/v_drop_down_bidang',$data);
	}
	
	//<----- Unit ------->
	function unit($id){
        $isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Unit'; 
		$isi['kodeunik'] = $this->model_organisasi->buat();
		$isi['urusan']=$this->model_organisasi->ambil_urusan();	
        $isi['unit']     = $this->model_organisasi->tampil_unit($id);
        $isi['message'] = $this->session->flashdata('message');
        $this->template->utama('organisasi/view_unit',$isi);        
     }
		
	function tambah_unit(){
        $data = array(            
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien004_01' => $this->input->post('unit'),
			'dien004_02' => $this->input->post('nama'),   
        );
        $this->model_organisasi->tambah_unit($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_unit($id){
		$data = $this->model_organisasi->get_unit($id);
		echo json_encode($data);
		}
	   
	   function update_unit(){
         $data = array(           
           'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien004_01' => $this->input->post('unit'),
			'dien004_02' => $this->input->post('nama'),              
        );
        $this->model_organisasi->update_unit(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
    }
        
    function delete_unit($id){
    	if ((bool) $this->model_organisasi->tampil_unit($id))
    	{
    		echo json_encode(array('status' => false, 'message' => 'Tidak dapat menghapus, karena sub unit sudah terisi'));
    		exit;
    	}
    	
		$this->session->set_flashdata('message', 'Unit Telah dihapus');
		$this->model_organisasi->delete_unit($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat Bidang di klik
	function pilih_unit(){
		$data['unit']=$this->model_organisasi->ambil_unit($this->uri->segment(3));
		$this->load->view('organisasi/v_drop_down_unit',$data);
	}
	
	//<-----Sub Unit ------->
	function sub_unit($id){
        $isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Sub Unit';
		$isi['kodeunik'] = $this->model_organisasi->buat_kd();
		$isi['urusan']=$this->model_organisasi->ambil_urusan();	 
        $isi['sub']     = $this->model_organisasi->tampil_sub($id);
        $this->template->utama('organisasi/view_subunit',$isi);        
     }
	
	function tambah_sub(){
        $data = array(            
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien004_01' => $this->input->post('unit'),
            'dien005_01' => $this->input->post('sub'),
			'dien005_02' => $this->input->post('nama'),   
        );
        $this->model_organisasi->tambah_sub($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_sub($id){
		$data = $this->model_organisasi->get_sub($id);
		echo json_encode($data);
		}
	   
	   function update_sub(){
         $data = array(           
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien004_01' => $this->input->post('unit'),
            'dien005_01' => $this->input->post('sub'),
			'dien005_02' => $this->input->post('nama'),              
        );
        $this->model_organisasi->update_sub(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_sub($id){
		$this->model_organisasi->delete_sub($id);
		echo json_encode(array("status" => TRUE));
    }    
}       
