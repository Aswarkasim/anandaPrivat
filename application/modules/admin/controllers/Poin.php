<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Kursus_model', 'KS');
    }

    public function index()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_order_poin');

        $config['base_url']     = base_url('admin/poin/index');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 3;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);

        $order = $this->KS->listingPoin($config['per_page'], $start)->result();

        $data = [
            'title'    => 'Tambah Poin',
            'pagination'=> $pagination,
            'start'     => $start,
            'order'     => $order,
            'content'   => 'admin/poin/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function request($id_order_poin)
    {
        $order = $this->KS->listingPoinOne($id_order_poin);
        $tentor = $this->Crud_model->listingOne('tbl_tentor', 'id_user', $order->id_tentor);
        $poin = $tentor->poin;
        $data = [
            'title'    => 'Manajemen Poin',
            'poin'      => $poin,
            'order'      => $order,
            'content'   => 'admin/poin/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function submitPoin($id_order_poin)
    {
        $order = $this->Crud_model->listingOne('tbl_order_poin', 'id_order_poin', $id_order_poin);
        $id_tentor = $order->id_tentor;
        $tentor = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_tentor);


        $poinMasuk = $this->input->post('poin');
        $operasi = $this->input->post('operasi');
        $poinOperasi = "";
        if ($operasi == "tambah") {
            $poinOperasi = $poinMasuk + $tentor->poin;
        } else if ($operasi == "kurang") {
            $poinOperasi =  $tentor->poin - $poinMasuk;
        }
        if ($poinMasuk == "") {
            $poinOperasi = $tentor->poin + $order->jumlah_poin;
        }


        $dataPoin = ['poin'  => $poinOperasi];
        $this->Crud_model->edit('tbl_tentor', 'id_user', $id_tentor, $dataPoin);
        $data = ['is_read'   => 1];
        $this->Crud_model->edit('tbl_order_poin', 'id_order_poin', $id_order_poin, $data);
        $this->session->set_flashdata('msg', 'Poin ditambah');

        redirect('admin/poin/request/' . $id_order_poin);
    }

    public function pencairan_poin()
    {
        // $provinsi = $this->Crud_model->listing('tbl_provinsi');

        // Config
        // $this->db->like('nama_provinsi', $search);
        $this->db->from('tbl_pencairan');

        $config['base_url']     = base_url('admin/poin/pencairan_poin');
        $config['total_rows']   = $this->db->count_all_results();
        $config['per_page']     = 10;

        // Initialize
        $pagination = $this->pagination->initialize($config);


        $start      = $this->uri->segment(4);
        $pencairan = $this->KS->listingPencairanPoin($config['per_page'], $start);


        $data = [
            'title'    => 'Pencairan Poin',
            'pagination'=> $pagination,
            'start'     => $start,
            'pencairan'    => $pencairan,
            'content'   => 'admin/poin/pencairan_poin'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
