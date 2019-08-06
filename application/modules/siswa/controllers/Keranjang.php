<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/Siswa_model', 'SM');
        is_logged_in('Siswa');
    }


    public function index()
    {
        $id_siswa = $this->session->userdata('id_user');
        $jumlah = $this->Crud_model->listingOneAll('tbl_order', 'id_siswa', $id_siswa);

        // Config
        // $config['base_url']      = 'http://localhost/anandaprivate/tentor/pagination/index';
        $config['base_url']     = base_url('siswa/keranjang/index');
        //$config['total_rows']   = $this->SM->countAllOnline($id_siswa);
        $config['total_rows']   = count($jumlah);
        $config['per_page']     = 4;
        $config['num_links']    = 2;

        // Styling
        $config['full_tag_open'] = '<nav class="wt-pagination"><ul>';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link']        = '<i class="lnr lnr-chevron-left"></i>';
        $config['first_tag_open']    = '<li class="wt-prevpage">';
        $config['first_tag_close']   = '</li>';

        $config['last_link']         = '<i class="lnr lnr-chevron-right"></i>';
        $config['last_tag_open']     = '<li class="wt-nextpage">';
        $config['last_tag_close']    = '</li>';

        $config['next_link']         = FALSE;
        $config['next_tag_open']     = '<li class="wt-nextpage">';
        $config['next_tag_close']    = '</li>';

        $config['prev_link']         = FALSE;
        $config['prev_tag_open']     = '<li class="wt-prevpage">';
        $config['prev_tag_close']    = '</li>';


        $config['cur_tag_open']      = '<li class="active"><a>';
        $config['cur_tag_close']     = '</a></li>';

        $config['num_tag_open']      = '<li>';
        $config['num_tag_close']     = '</li>';

        // print_r($config['total_rows']);die;

        // Initialize
        $pagination = $this->pagination->initialize($config);

        $start      = $this->uri->segment(4);


        $keranjang = $this->SM->listingKeranjang('tbl_order.id_siswa', $id_siswa, $config['per_page'], $start)->result();

        $data = [
            'title'     => 'Anada Private || Keranjang',
            'pagination' => $pagination,
            'start'     => $start,
            'keranjang' => $keranjang,
            'content'   => 'siswa/keranjang/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function batal($id_order)
    {
        $this->Crud_model->delete('tbl_order', 'id_order', $id_order);
        $this->session->flashdata('msg', 'dihapus');
        redirect('siswa/keranjang', 'refresh');
    }
}
