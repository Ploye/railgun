<?php 
class M_email extends CI_Model{
	function __construct(){
		parent:: __construct();

	}

	function emails(){

		 $query = $this->db->query(
		 	"SELECT * FROM t_login
			WHERE email = '".$this->input->post('email')."'
			AND password = '".$this->input->post('password')."'
		 	");

}
}
 ?> 
