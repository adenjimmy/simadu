<?php  Class Program extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->model('model_program');
        $this->load->library(array('template','pagination','form_validation'));
    }
        
    function index(){
        $isi['judul']    = 'Program';
        $isi['subjudul'] = 'Kegiatan'; 
		$isi['urusan']= $this->model_program->ambil_urusan();
		$isi['kodeunik'] = $this->model_program->buat();
        $isi['pro']     = $this->model_program->tampilkan();
        $this->template->utama('program/view_program',$isi);
        
       } 
	
      function tambah(){
        $data = array(            
            'dien002_01' => $this->input->post('di'),
            'dien003_01' => $this->input->post('di1'),
            'dien015_01' => $this->input->post('di2'),
            'dien015_02' => $this->input->post('di3')   
        );
        $this->model_program->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_program->get($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
            'dien002_01' => $this->input->post('di'),
            'dien003_01' => $this->input->post('di1'),
            'dien015_01' => $this->input->post('di2'),
            'dien015_02' => $this->input->post('di3')              
        );
        $this->model_program->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		$this->model_program->delete($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	// dijalankan saat urusan di klik
	function pilih_bidang(){
		$data['bidang']=$this->model_program->ambil_bidang($this->uri->segment(3));
		$this->load->view('program/v_drop_down_bidang',$data);
	}
	
	// dijalankan saat Bidang di klik
	function pilih_unit(){
		$data['unit']=$this->model_program->ambil_unit($this->uri->segment(3));
		$this->load->view('program/v_drop_down_unit',$data);
	}
	
	//<----- Kegiatan ------->
	function kegiatan(){
        $isi['judul']    = 'Program';
        $isi['subjudul'] = 'Kegiatan';
		$isi['urusan']= $this->model_program->ambil_urusan(); 
		$isi['kodeunik'] = $this->model_program->buat_kode();
        $isi['keg']     = $this->model_program->tampilk();
        $this->template->utama('program/view_kegiatan',$isi);
        
       } 
	
      function tambah1(){
        $data = array(            
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien015_01' => $this->input->post('kode'),
            'dien016_01' => $this->input->post('ko'),
            'dien016_02' => $this->input->post('nama')   
        );
        $this->model_program->tambah1($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit1($id){
		$data = $this->model_program->get1($id);
		echo json_encode($data);
		}
	   
	   function update1(){
         $data = array(           
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien015_01' => $this->input->post('kode'),
            'dien016_01' => $this->input->post('ko'),
            'dien016_02' => $this->input->post('nama')               
        );
        $this->model_program->update1(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete1($id){
		$this->model_program->delete1($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	public function get_alldata() {
        $kode = $this->input->post('kode',TRUE); //variabel kunci yang di bawa dari input text id kode
        $query = $this->model_program->get_allkota(); //query model
 
        $kota       =  array();
        foreach ($query as $d) {
            $kota[]     = array(
                'label' => $d->dien015_02, //variabel array yg dibawa ke label ketikan kunci
                'nama' => $d->dien015_02 , //variabel yg dibawa ke id nama               
            );
        }
        echo json_encode($kota);      //data array yang telah kota deklarasikan dibawa menggunakan json
    }

	
	public function search(){
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment(3);

		// cari di database
		$data = $this->db->from('dien015')->like('dien015_02',$keyword)->get();	

		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->dien015_02,
				'kode'	=>$row->dien015_01,
				'nama'	=>$row->dien015_02
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}  
	
	function cariNim()	{
		$nim=$this->input->get('nim');
		$query=$this->model_program->cariNim($nim);
		foreach($query->result() as $row)
		{
		echo "$row->nim \n";
		}
	}
}       
