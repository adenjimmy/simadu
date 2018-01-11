<?php
class Model_kegiatan extends CI_Model{
	
       private $table="dien021";
       
    
    function tampilkan(){
        $query=$this->db->get('dien021');
         return $query->result();
    }
	
	function tambah($data){
        $this->db->insert('dien021', $data);
		return $this->db->insert_id();
    }
    
   function get($id){
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update('dien021', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_id($id)	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
	 //<------------model Kegiatan-------------->
	 function tampilkeun(){
        $query=$this->db->get('dien022');
         return $query->result();
    }
	
	function tambah1($data){
        $this->db->insert('dien022', $data);
		return $this->db->insert_id();
    }
    
   function get1($id){
		$this->db->from('dien022');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update1($where, $data){
       $this->db->update('dien022', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete1($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien022');
	}
  
}
