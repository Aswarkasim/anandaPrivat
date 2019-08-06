<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Error_page extends CI_Controller {

    public function index()
    {
        echo 'Halaman yang anda minta tidak ditemukan. <a href="'.base_url('home').'">Kembali ke jalan yang benar</a>';
    }

}
