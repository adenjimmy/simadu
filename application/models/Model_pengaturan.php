<?php
class Model_pengaturan extends CI_Model{
       private $table="dien014";
       
    function Tampilkan(){
         $query=$this->db->get('dien014');
         return $query->result();
       }	     
       
	function buat_kode()   {    
	  $this->db->select('RIGHT(dien014.dien014_01,2) as kode', FALSE);
	  $this->db->order_by('dien014_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien014');        
	  if($query->num_rows() <> 0){       
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;     
	  }
	  else{       
	   //jika kode belum ada      
	   $kode = 1;     
	  }	  
	  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
	  $kodejadi = $kodemax;     
	  return $kodejadi;  
	 }
		
	function buat()   {    
	  $this->db->select('RIGHT(dien033.dien033_01,2) as kode', FALSE);
	  $this->db->order_by('dien033_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien033');        
	  if($query->num_rows() <> 0){       
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;     
	  }
	  else{       
	   //jika kode belum ada      
	   $kode = 1;     
	  }	  
	  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
	  $kodejadi = $kodemax;     
	  return $kodejadi;  
	 }
	   
    function tambah($data){
        $this->db->insert('dien014', $data);
		return $this->db->insert_id();
    }
    
   function get($id){
		$this->db->from('dien014');
		$this->db->where('dien014_01',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update('dien014', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete($id)	{
		$this->db->where('dien014_01', $id);
		$this->db->delete('dien014');
	}
	
	// <-----model Konversi----------->
	function tampil(){
	   $this->db->SELECT('dien033.id,dien033.dien033_01,dien033.dien033_02,dien033.dien033_03,dien033.dien033_04,dien033.dien033_05,dien033.dien014_01_1,dien014.dien014_02');	
       $this->db->from('dien033');
	   $this->db->join('dien014','dien014.dien014_01=dien033.dien014_01');	   	   
       $query=$this->db->get();
       return $query->result();         
       }
	
	function tambah_kon($data){
        $this->db->insert('dien033', $data);
		return $this->db->insert_id();
    }
    
   function get_kon($id){
		$this->db->from('dien033');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_kon($where, $data){
       $this->db->update('dien033', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_kon($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien033');
	}
	
	// <-----model FIFO----------->
	function tampilkeun(){
         $query=$this->db->get('dien023');
         return $query->result();
       }
	
	function tambah_fifo($data){
        $this->db->insert('dien023', $data);
		return $this->db->insert_id();
    }
    
   function get_fifo($id){
		$this->db->from('dien023');
		$this->db->where('dien023_01',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_fifo($where, $data){
       $this->db->update('dien023', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_fifo($id)	{
		$this->db->where('dien023_01', $id);
		$this->db->delete('dien023');
	}
		
}
