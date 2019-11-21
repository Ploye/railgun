<?php 
class About extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}	
	function index(){
		$data['active'] = 'about';
		$this->load->view('v_about',$data);
	}
}

 ?>