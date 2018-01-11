<?php
class Model_organisasi extends CI_Model{
       private $table="dien002";
	   var $order = array('id' => 'desc'); // default order 
       
    function Tampilkan(){
         $query=$this->db->get('dien002');
         return $query->result();
       }
	
	function buat_kode()   {    
	  $this->db->select('RIGHT(dien003.dien003_01,2) as kode', FALSE);
	  $this->db->order_by('dien003_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien003');        
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
	  $this->db->select('RIGHT(dien004.dien004_01,2) as kode', FALSE);
	  $this->db->order_by('dien004_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien004');        
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
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }
    
   function get_id($id){
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_id($id)	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
	// <-----model bidang----------->
	function tampil_bid($id){
	   $this->db->SELECT('dien003.id,dien003.dien003_01,dien003.dien003_02,dien002.dien002_02');	
       $this->db->WHERE('dien002.id',$id);
       $this->db->from('dien003');
	   $this->db->join('dien002','dien002.dien002_01=dien003.dien002_01');	   	   
       $query=$this->db->get();
       return $query->result();         
       }
	
	public function ambil_urusan() {
	$sql_prov=$this->db->get('dien002');	
	if($sql_prov->num_rows()>0){
		foreach ($sql_prov->result_array() as $row)
			{
				$result['-']= '- Pilih Urusan -';
				$result[$row['dien002_01']]= ucwords(strtolower($row['dien002_02']));
			}
			return $result;
		}
	}
	
	function tambah_bid($data){
        $this->db->insert('dien003', $data);
		return $this->db->insert_id();
    }
    
   function get_bid($id){
		$this->db->from('dien003');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_bid($where, $data){
       $this->db->update('dien003', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_bid($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien003');
	}
	
	// <-----model Unit----------->
	function tampil_unit($id){
       $this->db->SELECT('dien004.id,dien004.dien004_01,dien004.dien004_02,dien002.dien002_02,dien003.dien003_02');	
       $this->db->WHERE('dien003.id',$id);
       $this->db->from('dien004');
	   $this->db->join('dien002','dien002.dien002_01=dien004.dien002_01');
	   $this->db->join('dien003','dien003.dien003_01=dien004.dien003_01');	   	   
       $query=$this->db->get();
       return $query->result();         
       }
     	
	public function ambil_bidang($kd_bid){
		$this->db->where('dien002_01',$kd_bid);
		$this->db->order_by('dien003_02','asc');
		$sql_bidang=$this->db->get('dien003');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien003_01']]= ucwords(strtolower($row['dien003_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Nama Bidang -';
		}
        return $result;
	}
	
	public function ambil_unit($kd_unit){
		$this->db->where('dien003_01',$kd_unit);
		$this->db->order_by('dien004_02','asc');
		$sql_bidang=$this->db->get('dien004');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien004_01']]= ucwords(strtolower($row['dien004_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Nama Unit -';
		}
        return $result;
	}
	
	function tambah_unit($data){
        $this->db->insert('dien004', $data);
		return $this->db->insert_id();
    }
    
   function get_unit($id){
		$this->db->from('dien004');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_unit($where, $data){
       $this->db->update('dien004', $data, $where);
		return $this->db->affected_rows();
    }    
     
    public function delete_unit($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien004');
	}
	
	// <-----model Sub Unit----------->
	function tampil_sub($id){
       $this->db->SELECT('dien005.id,dien005.dien005_01,dien005.dien005_02,dien002.dien002_02,dien003.dien003_02,dien004.dien004_02');	
       $this->db->WHERE('dien004.id',$id);
       $this->db->from('dien005');
	   $this->db->join('dien002','dien002.dien002_01=dien005.dien002_01');
	   $this->db->join('dien003','dien003.dien003_01=dien005.dien003_01');
	   $this->db->join('dien004','dien004.dien004_01=dien005.dien004_01');	   	   
       $query=$this->db->get();
       return $query->result();
       }
	
	function tambah_sub($data){
        $this->db->insert('dien005', $data);
		return $this->db->insert_id();
    }
    
   function get_sub($id){
		$this->db->from('dien005');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_sub($where, $data){
       $this->db->update('dien005', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_sub($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien005');
	}
	
	function buat_kd()   {    
	  $this->db->select('RIGHT(dien005.dien005_01,3) as kode', FALSE);
	  $this->db->order_by('dien005_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien005');        
	  if($query->num_rows() <> 0){       
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;     
	  }
	  else{       
	   //jika kode belum ada      
	   $kode = 1;     
	  }	  
	  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);    
	  $kodejadi = $kodemax;     
	  return $kodejadi;  
	 }
}
