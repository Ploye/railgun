<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_book');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}

	function buat_kode(){    
 	 $this->db->select('RIGHT(t_book.no_pas,2) as kode', FALSE);
 	 $this->db->order_by('no_pas','DESC');    
 	 $this->db->limit(1);    		
 	 $query = $this->db->get('t_book');      //cek dulu apakah ada sudah ada kode di tabel.    
 	 if($query->num_rows() <> 0){      
   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
  	 $kode = intval($data->kode) + 1;    
 	 }
 	 else{      
   //jika kode belum ada      
  	 $kode = 1;    
 	 }
 	 $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
 	 $kodejadi = "PS".$kodemax;    
	  return $kodejadi;  
	 }
}
// https://kliktau.blogspot.com/2016/12/cara-membuat-kode-otomatis-di.html?m=0