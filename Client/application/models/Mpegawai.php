<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_Model {

	// buat method untuk tampil data
    function get_data($token)
    {
        //mengambil hanya npm
        //$this->db->select("npm")

        $this->db->select("id AS id_pgw,
        kd_pegawai AS kd_pgw,
        nama_pegawai AS nama_pgw,
        alamat AS alamat_pgw,
        telepon AS telepon_pgw,
        ");

        $this->db->from("tb_pegawai");

        if(!empty($token))
        {
            $this->db->where("TO_BASE64(npm) = '$token'");
        }

        $this->db->order_by("kd_pegawai","ASC");

        $query = $this->db->get()->result();
        return $query;

    }

    public function proses_tambah_data()
    {
        $data = [
            "kd_pegawai" => $this->input->post('kd_pegawai'),
            "nama_pegawai" => $this->input->post('nama_pegawai'),
            "alamat" => $this->input->post('alamat'),
            "telepon" => $this->input->post('telepon'),
        ];

        $this->db->insert('tb_pegawai', $data);
    }
}