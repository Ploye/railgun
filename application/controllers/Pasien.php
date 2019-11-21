<?php 
class Pasien extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pasien');
	}	
	public function index(){
		// $x['data']=$this->m_pasien->show_barang();
		 $x['active'] = 'pasien';
		// $this->load->view('v_pasien',$data,$x);

		$x['data']=$this->m_pasien->show_barang();
		$this->load->view('v_pasien',$x);


            // $this->load->view('v_pasien',$x);
	}
}

 ?>