<?php
class Model_koreksi extends CI_Model{
       private $table="dien030";
       
     function Tampilkan(){
         $query=$this->db->get('dien030');
         return $query->result();
       }
	
    function tambah($data){
        $this->db->insert('dien030', $data);
		return $this->db->insert_id();
    }
    
   function get($id){
		$this->db->from('dien030');
		$this->db->where('dien030_01',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update('dien030', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete($id)	{
		$this->db->where('dien030_01', $id);
		$this->db->delete('dien030');
	}
	
	// <-----model rinci----------->
	function tampilkeun(){
         $query=$this->db->get('dien031');
         return $query->result();
       }
	
	function tambah_rinci($data){
        $this->db->insert('dien031', $data);
		return $this->db->insert_id();
    }
    
   function get_rinci($id){
		$this->db->from('dien031');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rinci($where, $data){
       $this->db->update('dien031', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rinci($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien031');
	}
	
	// <-----model Registrasi----------->
	function tampil_user(){
         $query=$this->db->get('dien032');
         return $query->result();
       }
	
	function tambah_user($data){
        $this->db->insert('dien032', $data);
		return $this->db->insert_id();
    }
    
   function get_user($id){
		$this->db->from('dien032');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_user($where, $data){
       $this->db->update('dien032', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_user($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien032');
	}	
}
