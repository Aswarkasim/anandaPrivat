<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{

    public function index()
    {

        $data = [
            'content'   => 'tentor/poin/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Poin.php */
