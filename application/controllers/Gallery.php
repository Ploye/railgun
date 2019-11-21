<?php 
class Gallery extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}	
	function index(){
		$data['active'] = 'gallery';
		$this->load->view('v_gallery',$data);
	}
}

 ?>