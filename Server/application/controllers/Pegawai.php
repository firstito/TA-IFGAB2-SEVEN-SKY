<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."libraries/Server.php";

class Pegawai extends Server {
       //buat konstruktor
       public function __construct()
       {
               parent::__construct();
                //panggil model "Mpegawai"
               $this->load->model("Mpegawai","model",TRUE);
       }

       	//buat fungsi "GET"
    // buat service "GET"
    function service_get()
    {
        // ambil parameter token "npm"
        $token = $this->get("kd_pegawai");

        // panggil method "get_data"
        $hasil = $this->model->get_data(base64_encode($token));
        // hasil respon
        $this->response(array("pegawai" => $hasil),200);

    }

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
}
