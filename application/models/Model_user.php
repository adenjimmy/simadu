<?php
class Model_user extends CI_Model{
       private $table="dien025";
       
     function Tampilkan(){
         $query=$this->db->get('dien025');
         return $query->result();
       }
	 
    function Tampil(){
         $query=$this->db->get('dien024');
         return $query->result();
       }	     
       
    function tambah($data){
        $this->db->insert('dien025', $data);
		return $this->db->insert_id();
    }
    
   function get($id){
		$this->db->from('dien025');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update('dien025', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien025');
	}
	
	// <-----model Group----------->
	function tampilkeun(){
         $query=$this->db->get('dien026');
         return $query->result();
       }
	
	function tambah_group($data){
        $this->db->insert('dien026', $data);
		return $this->db->insert_id();
    }
    
   function get_group($id){
		$this->db->from('dien026');
		$this->db->where('dien026_01',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_group($where, $data){
       $this->db->update('dien026', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_group($id)	{
		$this->db->where('dien026_01', $id);
		$this->db->delete('dien026');
	}
	
	// <-----model Otto----------->
	function tampilkin(){
         $query=$this->db->get('dien027');
         return $query->result();
       }
	
	function tambah_otto($data){
        $this->db->insert('dien027', $data);
		return $this->db->insert_id();
    }
    
   function get_otto($id){
		$this->db->from('dien027');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_otto($where, $data){
       $this->db->update('dien027', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_otto($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien027');
	}
	
	// <-----model Oto----------->
	function tampilan(){
         $query=$this->db->get('dien028');
         return $query->result();
       }
	
	function tambah_oto($data){
        $this->db->insert('dien028', $data);
		return $this->db->insert_id();
    }
    
   function get_oto($id){
		$this->db->from('dien028');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_oto($where, $data){
       $this->db->update('dien028', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_oto($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien028');
	}	
	
	// <-----model User Su Unit----------->
	function tampil_sub(){
         $query=$this->db->get('dien029');
         return $query->result();
       }
	
	function tambah_sub($data){
        $this->db->insert('dien029', $data);
		return $this->db->insert_id();
    }
    
   function get_sub($id){
		$this->db->from('dien029');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_sub($where, $data){
       $this->db->update('dien029', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_sub($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien029');
	}		
}
