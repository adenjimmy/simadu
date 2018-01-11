<?php
Class Pemda extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->model('model_pemda');
        $this->load->library(array('template','pagination','form_validation','upload'));
    }
        
    function index(){
        $isi['judul']    = 'Pemda';
        $isi['subjudul'] = 'Profil'; 
        $isi['profil']     = $this->model_pemda->tampilkan();
        $this->template->utama('pemda/index',$isi);
        
       }
       
	   function edit($id){
	   		$data['judul']    = 'Pemda';
	   		$data['pemda']=  $this->model_pemda->get_one($id)->row_array();
            $this->template->utama('pemda/edit',$data);
	   }
	   
	   function update(){
	   	$kode = $this->input->post('id');
	   		$config['upload_path'] = './assets/img/';
		    $config['allowed_types'] = 'jpeg|jpg|png';
		    $config['max_size']	= '3000';
		    $config['max_width']  = '2700';
		    $config['max_height']  = '2724';
			$config['file_name']      = trim(str_replace(" ","",date('dmYHi')));
		               
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }
			 		
			$data=array(
           'dien001_09'=>$this->input->post('nama'),
           'dien001_01'=>$this->input->post('tahun'),
           'dien001_03'=>$this->input->post('ibukota'),
           'dien001_04'=>$this->input->post('alamat'),
           'dien001_07'=>$gambar
                    );		
					
		 $this->model_pemda->update($kode,$data);
          redirect('pemda');
	   }	   

}