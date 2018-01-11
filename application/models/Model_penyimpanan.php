<?php
class Model_penyimpanan extends CI_Model{
	
       private $table="dien019";
       
    
    function tampilkan(){
       $this->db->SELECT('dien019.id,dien019.dien001_01,dien019.dien002_01,dien019.dien003_01,dien019.dien019_01,dien019.dien019_02,dien019.dien019_03,dien004.dien004_02,dien005.dien005_02');	
       $this->db->from('dien019');
	   $this->db->join('dien004','dien004.dien004_01=dien019.dien004_01');
	   $this->db->join('dien005','dien005.dien005_01=dien019.dien005_01');	   	   
       $query=$this->db->get();
       return $query->result();       
    }
	
	function tambah($data){
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }
    
   function get($id){
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
	
	public function ambil_unit($kd_bid){
		$this->db->where('dien003_01',$kd_bid);
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

	public function ambil_sub($kd_bid){
		$this->db->where('dien004_01',$kd_bid);
		$this->db->order_by('dien005_02','asc');
		$sql_bidang=$this->db->get('dien005');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien005_01']]= ucwords(strtolower($row['dien005_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Nama Sub Unit -';
		}
        return $result;
	}
	
	function buat()   {    
	  $this->db->select('RIGHT(dien019.dien019_01,3) as kode', FALSE);
	  $this->db->order_by('dien019_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien019');        
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
	
	function buatin()   {    
	  $this->db->select('RIGHT(dien020.dien020_01,2) as kode', FALSE);
	  $this->db->order_by('dien020_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien020');        
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
		
	 //<------------model Petugas-------------->
	 function tampilkeun(){       
       $this->db->SELECT('dien020.id,dien020.dien001_01,dien020.dien002_01,dien020.dien003_01,dien020.dien020_01,dien020.dien020_02,dien020.dien020_03,dien020.dien020_04,dien004.dien004_02,dien005.dien005_02,dien019.dien019_02');	
       $this->db->from('dien020');
	   $this->db->join('dien004','dien004.dien004_01=dien020.dien004_01');
	   $this->db->join('dien005','dien005.dien005_01=dien020.dien005_01');
	   $this->db->join('dien019','dien019.dien019_01=dien020.dien019_01');	   	   
       $query=$this->db->get();
       return $query->result();   
    }
	
	function tambah1($data){
        $this->db->insert('dien020', $data);
		return $this->db->insert_id();
    }
    
   function get1($id){
		$this->db->from('dien020');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update1($where, $data){
       $this->db->update('dien020', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete1($id)	{
		$this->db->where('dien001_01', $id);
		$this->db->delete('dien020');
	}
  
}
