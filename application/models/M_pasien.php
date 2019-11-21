<?php

class M_pasien extends CI_Model{
	function __construct(){
		parent:: __construct();

	}
      function show_barang(){
            $query=$this->db->query("SELECT * FROM t_book");
            return $query;
           
      }    


}