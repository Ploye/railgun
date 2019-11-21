<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('m_ambil_data');
		 // $this->load->model('m_kode');
		
		$this->load->helper('url');
 
	}
 
	public function index(){
		$x['data']=$this->m_ambil_data->ambil_kode();
		
		// $data['kode'] = $this->m_kode->kode();
		 // $data['t_book'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_home');
	}
 
	function tambah(){ 
		$this->load->view('v_home');
	}
	function hapus($id){
		$where = array('no_pas' => $id);
		$this->m_data->hapus_data($where,'t_book');
		redirect('pasien/index');
	}
	


	function tambah_aksi(){
	
		// $kodeunik = $this->input->post('kodeunik');
	    // $data = $this->input->post('kodeunik');
	    $no = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$imel = $this->input->post('imel');
		$date = $this->input->post('date');
		$cbo = $this->input->post('cbo');
 
		$data = array(
		   'no_pas' =>$no,
			'nama' => $nama,
			'email' => $imel,
			'tanggal' => $date,
			'depart' => $cbo
			);
	
		$this->m_data->input_data($data,'t_book');

		 // mysql_connect("localhost", "root", "") or die (mysql_error());
		 // mysql_select_db("db_ehealth") or die (mysql_error());
		 //   $ambil = mysql_query("SELECT no_pas FROM t_book order by no_pas");

		   
	    

            
		  $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'railgun70766@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'tsukuyomi7076',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('railgun70766@gmail.com', 'E-Health | Kelompok 5');
        // Email penerima
        $emailz = $this->input->post('imel');
        $this->email->to($emailz); // Ganti dengan email tujuan kamu

        // Lampiran email, isi dengan url/path file
        $this->email->attach('');

        // Subject email
        $this->email->subject('E-Health | Kelompok 5');
        // $nama = $this->input->post('nama');
        // Isi email
        $this->email->message("<h2>Hi, ".$nama."</h2><h3>Terimakasih sudah memesan no antrian di website E-Health.</h3><h2>ini no antrian anda : <h1>".$no."<h1></h2>");

        // Tampilkan pesan sukses atau error

        if ($this->email->send()) {
            echo 'Email Terkirim !';
            redirect('home');
            // echo "<script>alert('Loading');</script>";
        } else {
            
            echo "Gagal";
        }
		

	}
 
}