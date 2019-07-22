<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{

    public function provinsi()
    {
        $data = [
            'content'   => 'siswa/lokasi/provinsi'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function kota()
    {
        $data = [
            'content'   => 'siswa/lokasi/kota'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function kecamatan()
    {
        $data = [
            'content'   => 'siswa/lokasi/kecamatan'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
