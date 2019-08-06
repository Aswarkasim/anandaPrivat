<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Notif extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model', 'SM');

        is_logged_in('Siswa');
    }


    public function index()
    {
        // $cek = cek_notif_read('tbl_notif');
        // echo count($cek);
        // die;

        $id_user = $this->session->userdata('id_user');
        $notif = $this->Crud_model->listingOneAll('tbl_notif', 'id_user', $id_user);



        // Config
        // $config['base_url']      = 'http://localhost/anandaprivate/tentor/pagination/index';
        $config['base_url']     = base_url('siswa/notif/index');
        //$config['total_rows']   = $this->SM->countAllOnline($id_siswa);
        $config['total_rows']   = count($notif);
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

        // Initialize
        $pagination = $this->pagination->initialize($config);

        $start      = $this->uri->segment(4);

        $notifList = $this->SM->listingNotif('tbl_notif.id_user', $id_user, $config['per_page'], $start)->result();



        $data = [
            'title'     => 'Pesan',
            'pagination' => $pagination,
            'start'     => $start,
            'notif'     => $notifList,
            'content'   => 'siswa/notif/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function detail($id_notif)
    {
        $this->db->query("UPDATE tbl_notif SET is_read = '1' WHERE tbl_notif.id_notif = '$id_notif'");
        $notif = $this->SM->listingNotif('tbl_notif.id_notif', $id_notif)->row();
        $data = [
            'title'     => 'Edit Profil',
            'notif'     => $notif,
            'content'   => 'siswa/notif/detail'
        ];
        //lorem
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
