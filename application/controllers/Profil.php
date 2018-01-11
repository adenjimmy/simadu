<?php
Class Profil extends CI_Controller{
       
         
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
        $this->load->database();
        $this->load->model('model_admin');
        $this->load->library(array('template','pagination','form_validation','upload'));
    }
        
    function index(){
        $isi['judul']    = 'Profil';
        $isi['subjudul'] = 'Data'; 
        $isi['profil']     = $this->model_admin->tampilkan();
        $this->template->utama('master/view_profil',$isi);
        
       }
       
       function tambah(){
        $data = array(
            'id_admin' => $this->input->post('id_admin'),
            'id_urusan' => $this->input->post('urus'),
            'id_bidang' => $this->input->post('bid'),
            'unit' => $this->input->post('unit'),
            'nm_unit'=>  $this->input->post('nama')    
        );
        $this->model_unit->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
    
    function edit($id){
	$data = $this->model_admin->get_id($id);
	echo json_encode($data);
		}
                
    function update(){
         $data = array(
            'id_admin' => $this->input->post('id_admin'),
            'id_urusan' => $this->input->post('urus'),
            'id_bidang' => $this->input->post('bid'),
            'unit' => $this->input->post('unit'),
            'nm_unit'=>  $this->input->post('nama')
        );
       $this->model_unit->update(array('id_unit' => $this->input->post('id_unit')), $data);
	echo json_encode(array("status" => TRUE));
    }
    
    function delete($id){
	$this->model_unit->delete_id($id);
	echo json_encode(array("status" => TRUE));
    }
}