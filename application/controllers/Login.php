<?php 
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_data');
		$this->load->model('m_count');
	}	
	public function index(){
		$this->load->view('v_login');
	}
	public function aksi_login(){
        $username=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_dosen=$this->m_login->auth_dosen($username,$password);
 
        if($cek_dosen->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_dosen->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['role']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['user_id']);
                    $this->session->set_userdata('ses_nama',$data['email']);
                     $this->session->set_userdata($data);
                    redirect('page');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['user_id']);
                    $this->session->set_userdata('ses_nama',$data['email']);
                     $this->session->set_userdata($data);
                    redirect('page');
                      
                 }

             }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo "<script>alert('Username atau password salah');history.go(-1);</script>";
                            // echo "Username atau password salah";
                         
                    }
        
 
    }

	public function logout(){
		 $this->session->set_userdata('akses','2');
		 $data['kodeunik'] = $this->m_data->buat_kode();
		$data['active'] = 'home';
		// $data['total_asset'] = $this->m_count->hitungJumlahAsset();
		$this->load->view('v_home',$data);
	}

 }
 ?>