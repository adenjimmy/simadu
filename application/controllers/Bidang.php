<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
		$this->load->model('model_organisasi');
		$this->load->library(array('template','pagination','form_validation','upload'));
	}

	public function index()	{
		$isi['judul']    = 'Organisasi';
        $isi['subjudul'] = 'Bidang'; 
		$isi['kodeunik'] = $this->model_organisasi->buat_kode();
        //$isi['urus']     = $this->model_organisasi->tampil_bid();
        $this->template->utama('view_bidang',$isi);
	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->id;
			$row[] = $person->dien002_01;
			$row[] = $person->dien003_01;
			$row[] = $person->dien003_02;			

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						//"draw" => $_POST['draw'],
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	function tambah_bid(){
        $data = array(            
            'dien002_01' => $this->input->post('urus'),
            'dien003_01' => $this->input->post('bida'),
            'dien003_02' => $this->input->post('nama')   
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
