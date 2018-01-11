<?php
class Model_program extends CI_Model{
       	
       private $table="dien015";
       
    function Tampilkan(){
         $query=$this->db->get('dien015');
         return $query->result();
       }	     
       
    function tambah($data){
        $this->db->insert('dien015', $data);
		return $this->db->insert_id();
    }
    
   function get($id){
		$this->db->from('dien015');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update($where, $data){
       $this->db->update('dien015', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete($id)	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
	function buat()   {    
	  $this->db->select('RIGHT(dien015.dien015_01,3) as kode', FALSE);
	  $this->db->order_by('dien015_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien015');        
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
	
	 function get_allkota() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) { //jika ada maka jalankan
            return $query->result();
        }
    }
	 
	 function cariNim($nim){
		$sql=$this->db->query('select * from dien015 where dien015_02 LIKE ‘%$nim%');
		return $sql;
	}

	//<---------Model Kegiatan------------->
	function Tampilk(){
         $query=$this->db->get('dien016');
         return $query->result();
       }	     
       
    function tambah1($data){
        $this->db->insert('dien016', $data);
		return $this->db->insert_id();
    }
    
   function get1($id){
		$this->db->from('dien016');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
	}
   
   function update1($where, $data){
       $this->db->update('dien016', $data, $where);
		return $this->db->affected_rows();
    }    
    
    public function delete1($id)	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	
	function buat_kode()   {    
	  $this->db->select('RIGHT(dien016.dien016_01,3) as kode', FALSE);
	  $this->db->order_by('dien016_01','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('dien016');        
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
