<?php
Class Rekening extends CI_Controller{
       
    function __construct() {
        parent::__construct();
        $this->model_squrity->getsqurity();
		$this->load->helper('fungsidate');
        $this->load->model('model_rekening');
        $this->load->library(array('template','pagination','form_validation','upload'));
    }
        
    function index(){
        $isi['judul']    = 'Rekening 1';
        $isi['subjudul'] = 'Kamus'; 
		$isi['kodeunik'] = $this->model_rekening->buat();
        $isi['rek']     = $this->model_rekening->tampilkan();
        $this->template->utama('rekening/index',$isi);        
       } 
	
    function tambah(){
        $data = array(            
            'dien006_01' => $this->input->post('kode'),
            'dien006_02' => $this->input->post('nama'),   
        );
        $this->model_rekening->tambah($data);
       echo json_encode(array("status" => TRUE));
    }
           
       function edit($id){
		$data = $this->model_rekening->get_id($id);
		echo json_encode($data);
		}
	   
	   function update(){
         $data = array(           
           'dien006_01' => $this->input->post('kode'),
           'dien006_02' => $this->input->post('nama'),              
        );
        $this->model_rekening->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete($id){
		$this->model_rekening->delete_id($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	//<----- Rek 2 ------->
	function rek2(){
        $isi['judul']    = 'Rekening 2';
        $isi['subjudul'] = 'Kamus'; 
		$isi['kodeunik'] = $this->model_rekening->buat1();
        $isi['rek2']     = $this->model_rekening->tampil_rek2();
        $this->template->utama('rekening/view_rek2',$isi);        
     }
	
	function tambah_rek2(){
        $data = array(            
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien007_02' => $this->input->post('nama'),   
        );
        $this->model_rekening->tambah_rek2($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek2($id){
		$data = $this->model_rekening->get_rek2($id);
		echo json_encode($data);
		}
	   
	   function update_rek2(){
         $data = array(           
           'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien007_02' => $this->input->post('nama'),               
        );
        $this->model_rekening->update_rek2(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek2($id){
		$this->model_rekening->delete_rek2($id);
		echo json_encode(array("status" => TRUE));
    } 
	
	// dijalankan saat rek1 di klik
	function pilih_rek1(){
		$data['reke2']=$this->model_rekening->ambil_rek2($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek2',$data);
	}
	
	//<----- Rek 3 ------->
	function rek3(){
        $isi['judul']    = 'Rekening 3';
        $isi['subjudul'] = 'Kamus';  
		$isi['kodeunik'] = $this->model_rekening->buat2();
		$isi['reke1']= $this->model_rekening->ambil_rek1();
        $isi['rek3']     = $this->model_rekening->tampil_rek3();
        $this->template->utama('rekening/view_rek3',$isi);        
     }
	
	function tambah_rek3(){
        $data = array(            
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien008_02' => $this->input->post('nama'),
            'dien008_03' => $this->input->post('saldo'),    
        );
        $this->model_rekening->tambah_rek3($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek3($id){
		$data = $this->model_rekening->get_rek3($id);
		echo json_encode($data);
		}
	   
	   function update_rek3(){
         $data = array(           
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien008_02' => $this->input->post('nama'),
            'dien008_03' => $this->input->post('saldo'),             
        );
        $this->model_rekening->update_rek3(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek3($id){
		$this->model_rekening->delete_rek3($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat rek2 di klik
	function pilih_rek2(){
		$data['reke3']=$this->model_rekening->ambil_rek3($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek3',$data);
	}
	
	//<-----Rek 4 ------->
	function rek4(){
        $isi['judul']    = 'Rekening 4';
        $isi['subjudul'] = 'Kamus'; 
		$isi['reke1']= $this->model_rekening->ambil_rek1();
		$isi['kodeunik'] = $this->model_rekening->buat3(); 
        $isi['rek4']     = $this->model_rekening->tampil_rek4();
        $this->template->utama('rekening/view_rek4',$isi);        
     }
	
	function tambah_rek4(){
        $data = array(            
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien009_01' => $this->input->post('kado'),
            'dien009_02' => $this->input->post('nama'),    
        );
        $this->model_rekening->tambah_rek4($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek4($id){
		$data = $this->model_rekening->get_rek4($id);
		echo json_encode($data);
		}
	   
	   function update_rek4(){
         $data = array(           
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien009_01' => $this->input->post('kado'),
            'dien009_02' => $this->input->post('nama'),             
        );
        $this->model_rekening->update_rek4(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek4($id){
		$this->model_rekening->delete_rek4($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat rek3 di klik
	function pilih_rek3(){
		$data['reke4']=$this->model_rekening->ambil_rek4($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek4',$data);
	}
	
	//<-----Rek 5 ------->
	function rek5(){
        $isi['judul']    = 'Rekening 5';
        $isi['subjudul'] = 'Kamus'; 
		$isi['reke1']= $this->model_rekening->ambil_rek1(); 
		$isi['kodeunik'] = $this->model_rekening->buat4();
        $isi['rek5']     = $this->model_rekening->tampil_rek5();
        $this->template->utama('rekening/view_rek5',$isi);        
     }
	
	function tambah_rek5(){
        $data = array(            
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien009_01' => $this->input->post('kado'),
            'dien010_01' => $this->input->post('koda'),
            'dien010_02' => $this->input->post('nama'),    
        );
        $this->model_rekening->tambah_rek5($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek5($id){
		$data = $this->model_rekening->get_rek5($id);
		echo json_encode($data);
		}
	   
	   function update_rek5(){
         $data = array(           
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien009_01' => $this->input->post('kado'),
            'dien010_01' => $this->input->post('koda'),
            'dien010_02' => $this->input->post('nama'),             
        );
        $this->model_rekening->update_rek5(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek5($id){
		$this->model_rekening->delete_rek5($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat rek4 di klik
	function pilih_rek4(){
		$data['reke5']=$this->model_rekening->ambil_rek5($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek5',$data);
	}
	
	//<-----Rek 6 ------->
	function rek6(){
        $isi['judul']    = 'Rekening 6';
        $isi['subjudul'] = 'Kamus'; 
		$isi['kodeunik'] = $this->model_rekening->buat5();
		$isi['reke1']= $this->model_rekening->ambil_rek1(); 
        $isi['rek6']     = $this->model_rekening->tampil_rek6();
        $this->template->utama('rekening/view_rek6',$isi);        
     }
	
	function tambah_rek6(){
        $data = array(            
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien009_01' => $this->input->post('kado'),
            'dien010_01' => $this->input->post('koda'),
            'dien011_01' => $this->input->post('kada'),
            'dien011_02' => $this->input->post('nama'),
            'dien011_03' => $this->input->post('desk'),    
        );
        $this->model_rekening->tambah_rek6($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek6($id){
		$data = $this->model_rekening->get_rek6($id);
		echo json_encode($data);
		}
	   
	   function update_rek6(){
         $data = array(           
            'dien006_01' => $this->input->post('kode'),
            'dien007_01' => $this->input->post('kd'),
            'dien008_01' => $this->input->post('kodi'),
            'dien009_01' => $this->input->post('kado'),
            'dien010_01' => $this->input->post('koda'),
            'dien011_01' => $this->input->post('kada'),
            'dien011_02' => $this->input->post('nama'),
            'dien011_03' => $this->input->post('desk'),             
        );
        $this->model_rekening->update_rek6(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek6($id){
		$this->model_rekening->delete_rek6($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat rek5 di klik
	function pilih_rek5(){
		$data['reke6']=$this->model_rekening->ambil_rek6($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek6',$data);
	}
	
	//<-----Rek 7 ------->
	function rek7(){
        $isi['judul']    = 'Rekening 6';
        $isi['subjudul'] = 'Kamus'; 
		$isi['kodeunik'] = $this->model_rekening->buat6();
		$isi['reke1']= $this->model_rekening->ambil_rek1(); 
        $isi['rek7']     = $this->model_rekening->tampil_rek7();
        $this->template->utama('rekening/view_rek7',$isi);        
     }
	
	function tambah_rek7(){
        $data = array(            
            'dien006_01' => $this->input->post('kd'),
            'dien007_01' => $this->input->post('kd1'),
            'dien008_01' => $this->input->post('kd2'),
            'dien009_01' => $this->input->post('kd3'),
            'dien010_01' => $this->input->post('kd4'),
            'dien011_01' => $this->input->post('kd5'),
            'dien012_01' => $this->input->post('kd6'),
            'dien012_02' => $this->input->post('kd7'),
            'dien012_03' => $this->input->post('kd8'),    
        );
        $this->model_rekening->tambah_rek7($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek7($id){
		$data = $this->model_rekening->get_rek7($id);
		echo json_encode($data);
		}
	   
	   function update_rek7(){
         $data = array(           
            'dien006_01' => $this->input->post('kd'),
            'dien007_01' => $this->input->post('kd1'),
            'dien008_01' => $this->input->post('kd2'),
            'dien009_01' => $this->input->post('kd3'),
            'dien010_01' => $this->input->post('kd4'),
            'dien011_01' => $this->input->post('kd5'),
            'dien012_01' => $this->input->post('kd6'),
            'dien012_02' => $this->input->post('kd7'),
            'dien012_03' => $this->input->post('kd8'),             
        );
        $this->model_rekening->update_rek7(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek7($id){
		$this->model_rekening->delete_rek7($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat rek6 di klik
	function pilih_rek6(){
		$data['reke7']=$this->model_rekening->ambil_rek7($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek7',$data);
	}

	//<-----Rek 8 ------->
	function rek8(){
        $isi['judul']    = 'Rekening 8';
        $isi['subjudul'] = 'Kamus'; 
		$isi['kodeunik'] = $this->model_rekening->buat7();
		$isi['reke1']= $this->model_rekening->ambil_rek1(); 
        $isi['rek8']     = $this->model_rekening->tampil_rek8();
        $this->template->utama('rekening/view_rek8',$isi);        
     }
	
	function tambah_rek8(){
        $data = array(            
            'dien006_01' => $this->input->post('kd'),
            'dien007_01' => $this->input->post('kd1'),
            'dien008_01' => $this->input->post('kd2'),
            'dien009_01' => $this->input->post('kd3'),
            'dien010_01' => $this->input->post('kd4'),
            'dien011_01' => $this->input->post('kd5'),
            'dien012_01' => $this->input->post('kd6'),
            'dien013_01' => $this->input->post('kd7'),
            'dien013_02' => $this->input->post('kd8'),
            'dien013_03' => $this->input->post('kd9'),
            'dien013_04' => $this->input->post('merk'),
            'dien013_05' => $this->input->post('type'),
            'dien013_06' => $this->input->post('ukuran'),
            'dien013_07' => $this->input->post('tgl'),
            'dien013_08' => $this->input->post('kond'),    
        );
        $this->model_rekening->tambah_rek8($data);
       echo json_encode(array("status" => TRUE));
    }      
      
	 function edit_rek8($id){
		$data = $this->model_rekening->get_rek8($id);
		echo json_encode($data);
		}
	   
	   function update_rek8(){
         $data = array(           
            'dien006_01' => $this->input->post('kd'),
            'dien007_01' => $this->input->post('kd1'),
            'dien008_01' => $this->input->post('kd2'),
            'dien009_01' => $this->input->post('kd3'),
            'dien010_01' => $this->input->post('kd4'),
            'dien011_01' => $this->input->post('kd5'),
            'dien012_01' => $this->input->post('kd6'),
            'dien013_01' => $this->input->post('kd7'),
            'dien013_02' => $this->input->post('kd8'),
            'dien013_03' => $this->input->post('kd9'),
            'dien013_04' => $this->input->post('merk'),
            'dien013_05' => $this->input->post('type'),
            'dien013_06' => $this->input->post('ukuran'),
            'dien013_07' => $this->input->post('tgl'),
            'dien013_08' => $this->input->post('kond'),             
        );
        $this->model_rekening->update_rek8(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));		
    }
        
    function delete_rek8($id){
		$this->model_rekening->delete_rek8($id);
		echo json_encode(array("status" => TRUE));
    }
	
	// dijalankan saat rek7 di klik
	function pilih_rek7(){
		$data['reke8']=$this->model_rekening->ambil_rek8($this->uri->segment(3));
		$this->load->view('rekening/v_drop_down_rek8',$data);
	}
	    
}       
