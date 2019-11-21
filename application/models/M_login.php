<?php 
class M_login extends CI_Model{
	function __construct(){
		parent:: __construct();

	}

	function auth_dosen($username,$password){
        $query=$this->db->query("SELECT * FROM t_login WHERE email='$username' AND password='$password' LIMIT 1");
        return $query;
         // $this->session->set_userdata('nama', $name);
    }
// 
// 	function cek_login(){

// 		// $query = $this->db->query(
// 		// 	"SELECT * FROM t_login
// 		// 	WHERE email = '".$this->input->post('email')."'
// 		// 	AND password = '".$this->input->post('password')."'
// 		// 	");
// 		// return $this->db->get_where('email',$where)->num_rows();

// 		// tong kitu coding na, ganti ku 
// 		//  kudu na tong t_login, tapi t_user, soalna kan akun, atau t_akunok
// 		$data = $this->db->where('email',$this->input->post('email'))->where('password',$this->input->post('password'))->get('t_login')->row();
// 		// $data = $this->db->get('role')->row();
// 		// $role = $data->role;
// 		// return $njir; 
// 		return $data;


// }
}
 ?>
