<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            'add'      => 'userAdd',
            'edit'      => 'userEdit',
            'content'   => 'home/home/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function order()
    {
        $data = [
            'content'   => 'home/home/order'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function step2()
    {
        $data = [
            'content'   => 'home/home/step2'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function step3()
    {
        $data = [
            'content'   => 'home/home/step3'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function step4()
    {
        $data = [
            'content'   => 'home/home/step4'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function step5()
    {
        $data = [
            'content'   => 'home/home/step5'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
