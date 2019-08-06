<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Bimbingan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model', 'PM');
        is_logged_in('Tentor');
    }


    public function index()
    {
        $id_tentor = $this->session->userdata('id_user');
        $bimbingan = $this->PM->listingBimbingan('tbl_online.id_tentor', $id_tentor)->result();


        $config['base_url']     = base_url('tentor/bimbingan/index');
        //$config['total_rows']   = $this->SM->countAllOnline($id_siswa);
        $config['total_rows']   = count($bimbingan);
        $config['per_page']     = 10;
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

        // Initialize
        $pagination = $this->pagination->initialize($config);

        $start      = $this->uri->segment(4);

        $bimbinganList = $this->PM->listingBimbingan('tbl_online.id_tentor', $id_tentor, $config['per_page'], $start)->result();

        // print_r($bimbingan)
        $data = [
            'title'          => 'Siswa bimbingan',
            'start'          => $start,
            'pagination'     => $pagination,
            'bimbingan'      => $bimbinganList,
            'content'        => 'tentor/bimbingan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    public function detail($id_online)
    {
        $online = $this->PM->listingBimbingan('tbl_online.id_online', $id_online)->row();

        $data = [
            'title'     => 'Bimbingan || ' . $online->nama_lengkap,
            'online'    => $online,
            'content'   => 'tentor/bimbingan/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
