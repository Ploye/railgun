<?php
class Page extends CI_Controller{

  function __construct(){
    parent::__construct();
    //validasi jika user belum login
     $this->load->model('m_data');
    $this->load->model('m_pasien');
    $this->load->model('m_count');
    if($this->session->userdata('masuk') != TRUE){
      
            $url=base_url();
            redirect($url);

        }
  }
 
  public function index(){
    $data['active'] = 'home';
      $data['kodeunik'] = $this->m_data->buat_kode();
      $data['total_inventori'] = $this->m_count->hitungJumlahInventori();
    // $data['kodeunik'] = $this->m_data->buat_kode();
    $this->load->view('v_home',$data);
   
    // $this->load->view('v_barang',$x);
  }
 
  public function data_mahasiswa(){
    // function ini hanya boleh diakses oleh admin 
    if($this->session->userdata('akses')=='1'){
        $data['active'] = 'pasien';   
      $data['kodeunik'] = $this->m_data->buat_kode();
      $data['total_inventori'] = $this->m_count->hitungJumlahInventori();
       $data['data']=$this->m_pasien->show_barang();
       

       $this->load->view('v_pasien',$data);
       // $this->load->view('v_pasien',$data);
    
           // $this->load->view('v_pasien',$x);

    }else{
      // echo "Anda tidak berhak mengakses halaman ini";
      echo "<script>alert('Anda tidak berhak mengakses halaman ini');history.go(-1);</script>";
    }
 
   }
  }
 
//   function input_nilai(){
//     // function ini hanya boleh diakses oleh admin dan dosen
//     if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
//       $this->load->view('v_input_nilai');
//     }else{
//       echo "Anda tidak berhak mengakses halaman ini";
//     }
//   }
 
//   function krs(){
//     // function ini hanya boleh diakses oleh admin dan mahasiswa
//     if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
//       $this->load->view('v_krs');
//     }else{
//       echo "Anda tidak berhak mengakses halaman ini";
//     }
//   }
//   function lhs(){
//     // function ini hanya boleh diakses oleh admin dan mahasiswa
//     if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
//       $this->load->view('v_lhs');
//     }else{
//       echo "Anda tidak berhak mengakses halaman ini";
//     }
//   }
// }
 ?>