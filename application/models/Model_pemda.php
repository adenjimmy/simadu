<?php
class Model_pemda extends CI_Model{
       private $table="dien001";
       private $primary="id";
    
    function tampilkan(){
         $query=$this->db->get('dien001');
         return $query->result();
    }
    
     function cek($kode){
        $this->db->where($this->primary,$kode);
        $query=$this->db->get($this->table);
        
        return $query;
    }
    
    function update($kode,$data){
        $this->db->where('dien001_01',$kode);
        $this->db->update($this->table,$data);
    }
    
    function get_one($id)
    {
        $param  =   array('dien001_01'=>$id);
        return $this->db->get_where('dien001',$param);
       
    }
  
}
