<?php 
class Contact extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}	
	function index(){
		$data['active'] = 'contact';
		$this->load->view('v_contact',$data);
	}
}

 ?>