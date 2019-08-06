<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Online extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kursus_model', 'KM');
    }

    public function index()
    {

        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_online');

        $config['base_url']     = base_url('admin/online/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 3;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);
        $online = $this->KM->listingOnline($config['per_page'], $start);

        $data = [
            'title'    => 'Manajemen Poin',
            'pagination'=> $pagination,
            'start'     => $start,
            'online'    => $online,
            'content'   => 'admin/online/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail($id_online)
    {
        $online = $this->KM->listingOnlineOne($id_online);
        $data = [
            'title'     => 'Edit Profil',
            'online'    => $online,
            'content'   => 'admin/online/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */
