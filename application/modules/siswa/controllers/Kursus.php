<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kursus extends CI_Controller
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
        $jumlah = $this->Crud_model->listingOneAll('tbl_online', 'id_siswa', $id_siswa);

        // Config
        // $config['base_url']      = 'http://localhost/anandaprivate/tentor/pagination/index';
        $config['base_url']     = base_url('siswa/kursus/index');
        //$config['total_rows']   = $this->SM->countAllOnline($id_siswa);
        $config['total_rows']   = count($jumlah);
        $config['per_page']     = 3;
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



        $online = $this->SM->listingOnline('tbl_online.id_siswa', $id_siswa, $config['per_page'], $start)->result();


        $data = [
            'title'     => 'Kursus Yang Diikuti',
            'pagination' => $pagination,
            'start'     => $start,
            'online'    => $online,
            'content'   => 'siswa/kursus/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail_kursus($id_online)
    {
        is_read('tbl_online', 'id_online', $id_online);
        $online = $this->SM->listingOnline('id_online', $id_online)->row();
        $data = [
            'title'     => 'Edit Profil',
            'online'    => $online,
            'content'   => 'siswa/kursus/detail_kursus'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function kirim_pesan()
    {
        $this->load->helper('string');
        $isi = $this->input->post('isi');
        ////ini kutambah

        $data = [
            'id_pesan'      => 'PSN' . random_string('numeric', '8'),
            'id_user'       => $this->session->userdata('id_user'),
            'isi'           => $isi,
            'is_read'       => 0,
            'date_created'  => date('y-m-d h:i:s')
        ];
        $this->Crud_model->add('tbl_pesan', $data);
        $this->session->flashdata('msg', 'Pesan dikirim');
    }
}
