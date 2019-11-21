<?php 
class M_count extends CI_Model{
	function __construct(){
		parent:: __construct();

	}
	public function hitungJumlahInventori(){
   $this->db->select_sum('depart');
   $query = $this->db->get('t_book');
   if($query->num_rows()>0)
   {
     return $query->row()->depart;
   }
   else
   {
     return 0;
   }
}
	}
 ?> 
