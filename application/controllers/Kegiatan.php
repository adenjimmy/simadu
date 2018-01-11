<?php  Class Kegiatan extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->model('model_kegiatan');
        $this->load->library(array('template','pagination','form_validation'));
    }
        
    function index(){
        $isi['judul']    = 'Kegiatan';
        $isi['subjudul'] = 'Data'; 
        $isi['kegiatan']     = $this->model_kegiatan->tampilkan();
		$isi['data']     = $this->model_kegiatan->tampilkeun();
        $this->template->utama('penyimpanan/view_kegiatan',$isi);        
       } 
	
      function tambah(){
        $data = array(            
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('kd'),
            'dien003_01' => $this->input->post('kd1'),
            'dien004_01' => $this->input->post('kd2'),
            'dien005_01' => $this->input->post('kd3'),
            'dien015_01' => $this->input->post('kd4'),
            'dien021_01' => $this->input->post('kd5'),
            'dien015_02' => $this->input->post('kd6'),
			'dien002_01_a' => $this->input->post('kd7'),
			'dien003_01_a' => $this->input->post('kd8')              
        );
        $this->model_kegiatan->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_kegiatan->get($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
            'dien001_01' => $this->input->post('thn'),
            'dien002_01' => $this->input->post('kd'),
            'dien003_01' => $this->input->post('kd1'),
            'dien004_01' => $this->input->post('kd2'),
            'dien005_01' => $this->input->post('kd3'),
            'dien015_01' => $this->input->post('kd4'),
            'dien021_01' => $this->input->post('kd5'),
            'dien015_02' => $this->input->post('kd6'),
			'dien002_01_a' => $this->input->post('kd7'),
			'dien003_01_a' => $this->input->post('kd8')               
        );
        $this->model_kegiatan->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		$this->model_kegiatan->delete($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	//<----- Data Kegiatan ------->
	function data(){
        $isi['judul']    = 'Kegiatan';
        $isi['subjudul'] = 'Data';       
		$isi['data']     = $this->model_kegiatan->tampilkeun();
        $this->template->utama('penyimpanan/view_datakegiatan',$isi);        
       } 
	
	 function tambah1(){
        $data = array(            
            'dien001_01' => $this->input->post('thn1'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kod'),
            'dien004_01' => $this->input->post('kode'),
            'dien005_01' => $this->input->post('kode1'),
            'dien015_01' => $this->input->post('kode2'),
            'dien021_01' => $this->input->post('kode3'),
            'dien016_01' => $this->input->post('kode4'),
			'dien016_02' => $this->input->post('kode5'),
			'dien018_01' => $this->input->post('kode6')              
        );
        $this->model_kegiatan->tambah1($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit1($id){
		$data = $this->model_kegiatan->get1($id);
		echo json_encode($data);
		}
	   
	   function update1(){
         $data = array(           
            'dien001_01' => $this->input->post('thn1'),
            'dien002_01' => $this->input->post('ko'),
            'dien003_01' => $this->input->post('kod'),
            'dien004_01' => $this->input->post('kode'),
            'dien005_01' => $this->input->post('kode1'),
            'dien015_01' => $this->input->post('kode2'),
            'dien021_01' => $this->input->post('kode3'),
            'dien016_01' => $this->input->post('kode4'),
			'dien016_02' => $this->input->post('kode5'),
			'dien018_01' => $this->input->post('kode6')                    
        );
        $this->model_kegiatan->update1(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete1($id){
		$this->model_kegiatan->delete1($id);
		echo json_encode(array("status" => TRUE));
    }    
}       
