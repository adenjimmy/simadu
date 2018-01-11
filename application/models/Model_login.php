<?php //if(!define('BASEPATH')) exit('No direct script access allowed');
Class Model_login extends CI_Model {
    
    function login($username,$password,$tahun){
        $pwd = md5($password);
        $this->db->where('dien025_01',$username);
        $this->db->where('dien025_05',$pwd);
		$this->db->where('dien025_04',$tahun);
        $query = $this->db->get('dien025');
        if($query->num_rows()>0){
            foreach($query->result() as $row){
                $sess = array('username' => $row->dien025_01,
                				'tahun' => $row->dien025_04,
                              'nama_lengkap'=> $row->dien025_03);
                $this->session->set_userdata($sess);
                redirect('Dashboard');
            }
        }
        else {
            $this->session->set_flashdata('info','Maaf Username, Tahun Anggaran dan Password anda salah');
            redirect('Auth');
            }
    }
}
