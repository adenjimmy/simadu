<?php  Class Pengaturan extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->model('model_pengaturan');
        $this->load->library(array('template','pagination','form_validation','upload'));
    }
        
    function index(){
        $isi['judul']    = 'Pengaturan';
        $isi['subjudul'] = 'Satuan'; 
		$isi['kodeunik'] = $this->model_pengaturan->buat_kode();
        $isi['sat']     = $this->model_pengaturan->tampilkan();
        $isi['fifo']     = $this->model_pengaturan->tampilkeun();
        $this->template->utama('pengaturan/view_satuan',$isi);        
       } 
	
      function tambah(){
        $data = array(            
            'dien014_01' => $this->input->post('kode'),
            'dien014_02' => $this->input->post('nama')   
        );
        $this->model_pengaturan->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_pengaturan->get($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
           //'dien014_01' => $this->input->post('kode'),
           'dien014_02' => $this->input->post('nama')              
        );
        $this->model_pengaturan->update(array('dien014_01' => $this->input->post('kode')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		$this->model_pengaturan->delete($id);
		echo json_encode(array("status" => TRUE));
    }
	
	//<------------ Satuan Konversi----------------->
	function konversi(){
        $isi['judul']    = 'Pengaturan';
        $isi['subjudul'] = 'Konversi'; 
		$isi['kodeunik'] = $this->model_pengaturan->buat();
        $isi['kon']     = $this->model_pengaturan->tampil();
        $this->template->utama('pengaturan/view_konversi',$isi);
        
       } 
	
      function tambah_kon(){
        $data = array(            
        	'dien033_01' => $this->input->post('sa'),
        	'dien033_02' => $this->input->post('sa1'),
            'dien014_01' => $this->input->post('sa2'),
            'dien033_03' => $this->input->post('sa3'),
            'dien014_01_1' => $this->input->post('sa4'), 
			'dien033_04' => $this->input->post('sa5'),
			'dien033_05' => $this->input->post('sa6'),  
        );
        $this->model_pengaturan->tambah_kon($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit_kon($id){
		$data = $this->model_pengaturan->get_kon($id);
		echo json_encode($data);
		}
	   
	   function update_kon(){
         $data = array(           
           'dien033_01' => $this->input->post('sa'),
        	'dien033_02' => $this->input->post('sa1'),
            'dien014_01' => $this->input->post('sa2'),
            'dien033_03' => $this->input->post('sa3'),
            'dien014_01_1' => $this->input->post('sa4'), 
			'dien033_04' => $this->input->post('sa5'),
			'dien033_05' => $this->input->post('sa6'),              
        );
        $this->model_pengaturan->update_kon(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_kon($id){
		$this->model_pengaturan->delete_kon($id);
		echo json_encode(array("status" => TRUE));
    }
	
	//<------------Perhitungan FIFO ------------------->
	function perhitungan(){
        $isi['judul']    = 'Pengaturan';
        $isi['subjudul'] = 'Perhitungan';        
        $isi['fifo']     = $this->model_pengaturan->tampilkeun();
        $this->template->utama('pengaturan/view_perhitungan',$isi);        
       } 
	
	 function tambah_fifo(){
        $data = array(            
            'dien023_01' => $this->input->post('kode'),
            'dien023_02' => $this->input->post('nama')   
        );
        $this->model_pengaturan->tambah_fifo($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit_fifo($id){
		$data = $this->model_pengaturan->get_fifo($id);
		echo json_encode($data);
		}
	   
	   function update_fifo(){
         $data = array(           
           'dien023_01' => $this->input->post('kode'),
           'dien023_02' => $this->input->post('nama')              
        );
        $this->model_pengaturan->update_fifo(array('dien023_01' => $this->input->post('kode')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_fifo($id){
		$this->model_pengaturan->delete_fifo($id);
		echo json_encode(array("status" => TRUE));
    }
	
}	 