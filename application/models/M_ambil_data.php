<?php 
 
class M_ambil_data extends CI_Model{
	
	function ambil_kode(){    
     $query=$this->db->query("SELECT no_pas FROM t_book WHERE no_pas ORDER BY DESC");
        return $query;
 }
}
// https://kliktau.blogspot.com/2016/12/cara-membuat-kode-otomatis-di.html?m=0