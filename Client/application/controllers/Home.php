<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("mpegawai");
    }
    
    public function index()
    {
		$this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $data['tampil'] = json_decode($this->client->simple_get(APIPEGAWAI));
        // var_dump($data['tampil']->pegawai);
        // die();
        $this->load->view('template/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $data['tampil'] = json_decode($this->client->simple_get(APIPEGAWAI));
        // var_dump($data['tampil']->pegawai);
        // die();
        $this->load->view('home/tambah_data', $data);
        $this->load->view('template/footer'); 
    }

    public function proses_tambah_data()
    {
        $this->mpegawai->proses_tambah_data();
        redirect('Home');
   
    }
}