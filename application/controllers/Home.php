	<?php 
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		  $this->load->model('m_data');
	}
	function index(){
		$data['active'] = 'home';
		$data['kodeunik'] = $this->m_data->buat_kode();
		$this->load->view('v_home',$data);
	}
}

 ?>