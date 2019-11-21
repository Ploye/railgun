<?php 
class Count extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_count');

	}
	public function hitung{
		$data['total_inventori'] = $this->m_count->hitungJumlahInventori();
		 $this->load->view('v_home',$data);
	}
	
	
}