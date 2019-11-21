<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {
  //  http://localhost/projectname/index.php/send_email
// function __construct()
//   {
//     parent::__construct();
//     $this->load->model('m_login');
//   } 
    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function index()
    {
      // Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'musa7076@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'tsukuyomi7076',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('musa7076@gmail.com', 'E-Health | Yorha');
        // Email penerima
        $emailz = $this->input->post('imel');
        $this->email->to($emailz); // Ganti dengan email tujuan kamu

        // Lampiran email, isi dengan url/path file
        $this->email->attach('www.samehadaku.tv');

        // Subject email
        $this->email->subject('Nge tess doang santaii  | Yorha');

        // Isi email
        $this->email->message("sorry spam cuy");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}