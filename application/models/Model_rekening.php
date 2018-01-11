<?php
class Model_rekening extends CI_Model{
       private $table="dien006";
       
    function Tampilkan(){
         $query=$this->db->get('dien006');
         return $query->result();
       }
		     
    function tambah($data){
        $this->db->insert('dien006', $data);
		return $this->db->insert_id();
    }
    
   function get_id($id){
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update('dien006', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_id($id)	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
	public function ambil_rek1() {
	$sql_prov=$this->db->get('dien006');	
	if($sql_prov->num_rows()>0){
		foreach ($sql_prov->result_array() as $row)
			{
				$result['-']= '- Pilih Rekening -';
				$result[$row['dien006_01']]= ucwords(strtolower($row['dien006_02']));
			}
			return $result;
		}
	}
	
	// <-----model Rek 2----------->
	function tampil_rek2(){
         $query=$this->db->get('dien007');
         return $query->result();
       }
	
	function tambah_rek2($data){
        $this->db->insert('dien007', $data);
		return $this->db->insert_id();
    }
    
   function get_rek2($id){
		$this->db->from('dien007');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek2($where, $data){
       $this->db->update('dien007', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek2($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien007');
	}
	
	public function ambil_rek2($kd_bid){
		$this->db->where('dien006_01',$kd_bid);
		$this->db->order_by('dien007_02','asc');
		$sql_bidang=$this->db->get('dien007');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien007_01']]= ucwords(strtolower($row['dien007_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	
	// <-----model rek3----------->
	function tampil_rek3(){
         $query=$this->db->get('dien008');
         return $query->result();
       }
	
	function tambah_rek3($data){
        $this->db->insert('dien008', $data);
		return $this->db->insert_id();
    }
    
   function get_rek3($id){
		$this->db->from('dien008');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek3($where, $data){
       $this->db->update('dien008', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek3($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien008');
	}
	
	public function ambil_rek3($kd_unit){
		$this->db->where('dien007_01',$kd_unit);
		$this->db->order_by('dien008_02','asc');
		$sql_bidang=$this->db->get('dien008');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien008_01']]= ucwords(strtolower($row['dien008_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	
	// <-----model rek4----------->
	function tampil_rek4(){
         $query=$this->db->get('dien009');
         return $query->result();
       }
	
	function tambah_rek4($data){
        $this->db->insert('dien009', $data);
		return $this->db->insert_id();
    }
    
   function get_rek4($id){
		$this->db->from('dien009');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek4($where, $data){
       $this->db->update('dien009', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek4($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien009');
	}
	
	public function ambil_rek4($kd_rek){
		$this->db->where('dien008_01',$kd_rek);
		$this->db->order_by('dien009_02','asc');
		$sql_bidang=$this->db->get('dien009');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien009_01']]= ucwords(strtolower($row['dien009_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	
	// <-----model rek5----------->
	function tampil_rek5(){
         $query=$this->db->get('dien010');
         return $query->result();
       }
	
	function tambah_rek5($data){
        $this->db->insert('dien010', $data);
		return $this->db->insert_id();
    }
    
   function get_rek5($id){
		$this->db->from('dien010');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek5($where, $data){
       $this->db->update('dien010', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek5($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien010');
	}
	
	public function ambil_rek5($kd_rek){
		$this->db->where('dien009_01',$kd_rek);
		$this->db->order_by('dien010_02','asc');
		$sql_bidang=$this->db->get('dien010');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien010_01']]= ucwords(strtolower($row['dien010_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	
	// <-----model rek 6----------->
	function tampil_rek6(){
         $query=$this->db->get('dien011');
         return $query->result();
       }
	
	function tambah_rek6($data){
        $this->db->insert('dien011', $data);
		return $this->db->insert_id();
    }
    
   function get_rek6($id){
		$this->db->from('dien011');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek6($where, $data){
       $this->db->update('dien011', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek6($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien011');
	}
	
	// <-----model rek 7----------->
	function tampil_rek7(){
         $query=$this->db->get('dien012');
         return $query->result();
       }
	
	function tambah_rek7($data){
        $this->db->insert('dien012', $data);
		return $this->db->insert();
    }
    
   function get_rek7($id){
		$this->db->from('dien012');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek7($where, $data){
       $this->db->update('dien012', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek7($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien012');
	}
	
	public function ambil_rek6($kd_rek){
		$this->db->where('dien010_01',$kd_rek);
		$this->db->order_by('dien011_02','asc');
		$sql_bidang=$this->db->get('dien011');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien011_01']]= ucwords(strtolower($row['dien011_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	// <-----model rek 8----------->
	function tampil_rek8(){
         $query=$this->db->get('dien013');
         return $query->result();
       }
	
	function tambah_rek8($data){
        $this->db->insert('dien013', $data);
		return $this->db->insert_id();
    }
    
   function get_rek8($id){
		$this->db->from('dien013');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update_rek8($where, $data){
       $this->db->update('dien013', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete_rek8($id)	{
		$this->db->where('id', $id);
		$this->db->delete('dien013');
	}
	
	public function ambil_rek7($kd_rek){
		$this->db->where('dien011_01',$kd_rek);
		$this->db->order_by('dien012_02','asc');
		$sql_bidang=$this->db->get('dien012');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien012_01']]= ucwords(strtolower($row['dien012_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	
	public function ambil_rek8($kd_rek){
		$this->db->where('dien012_01',$kd_rek);
		$this->db->order_by('dien013_02','asc');
		$sql_bidang=$this->db->get('dien013');
		if($sql_bidang->num_rows()>0){

		foreach ($sql_bidang->result_array() as $row)
        {
            $result[$row['dien013_01']]= ucwords(strtolower($row['dien013_02']));
        }
		} else {
		   $result['-']= '- Belum Ada Rekening -';
		}
        return $result;
	}
	
	function buat()   {    
	  $this->db->select('RIGHT(dien006.dien006_01,2) as kode', FALSE);
	  $this->db->order_by('dien006_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien006');        
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
	
	function buat1()   {    
	  $this->db->select('RIGHT(dien007.dien007_01,3) as kode', FALSE);
	  $this->db->order_by('dien007_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien007');        
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
	
	function buat2()   {    
	  $this->db->select('RIGHT(dien008.dien008_01,3) as kode', FALSE);
	  $this->db->order_by('dien008_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien008');        
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
	
	function buat3()   {    
	  $this->db->select('RIGHT(dien009.dien009_01,3) as kode', FALSE);
	  $this->db->order_by('dien009_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien009');        
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
	
	function buat4()   {    
	  $this->db->select('RIGHT(dien010.dien010_01,3) as kode', FALSE);
	  $this->db->order_by('dien010_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien010');        
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
	
	function buat5()   {    
	  $this->db->select('RIGHT(dien011.dien011_01,3) as kode', FALSE);
	  $this->db->order_by('dien011_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien011');        
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
	
	function buat6()   {    
	  $this->db->select('RIGHT(dien012.dien012_01,3) as kode', FALSE);
	  $this->db->order_by('dien012_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien012');        
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
	
	function buat7()   {    
	  $this->db->select('RIGHT(dien013.dien013_01,3) as kode', FALSE);
	  $this->db->order_by('dien013_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien013');        
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
