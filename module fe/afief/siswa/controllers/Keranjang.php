<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
        $data = [
            'content'   => 'siswa/keranjang/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
