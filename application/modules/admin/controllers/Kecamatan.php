<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pagination_model');
        $this->load->model('admin/Kursus_model');
    }

    function index()
    {

        // Config
        // $config['base_url']      = 'http://localhost/anandaprivate/tentor/pagination/index';
        $config['base_url']     = base_url('admin/kecamatan/index');
        $config['total_rows']   = $this->Pagination_model->countAllKabupaten();
        $config['per_page']     = 10;
        $config['num_links']    = 1;

        // Styling
        $config['full_tag_open'] = '<nav class="wt-pagination"><ul>';
        $config['full_tag_close']= '</ul></nav>';

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

        $kecamatan = $this->Kursus_model->listingKec($config['per_page'], $start);
        $zonasi = $this->Crud_model->listing('tbl_zonasi');

        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/kecamatan/add',
            'pagination'=> $pagination,
            'start'     => $start,
            'kecamatan'  => $kecamatan,
            'zonasi'  => $zonasi,
            'content'   => 'admin/kecamatan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function add()
    {
        $this->load->helper('string');

        $kabupaten = $this->Crud_model->listing('tbl_kabupaten');
        $zonasi = $this->Crud_model->listing('tbl_zonasi');
        $valid = $this->form_validation;
        $valid->set_rules('nama_kecamatan', 'Nama Kecamatan', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'id_kecamatan'  => random_string('numeric', 6),
                'nama_kecamatan'      => $this->input->post('nama_kecamatan'),
                'id_kabupaten'      => $this->input->post('id_kabupaten'),
                'id_zonasi'      => $this->input->post('id_zonasi'),
            );
            $this->Crud_model->add('tbl_kecamatan', $data);
            $this->session->set_flashdata('msg', 'Kecamatan ditambah');
            redirect('admin/kecamatan', 'refresh');
        }
        $data = [
            'title'   => 'Kecamatan || Ananda Private',
            'kabupaten'  => $kabupaten,
            'zonasi'  => $zonasi,
            'content'   => 'admin/kecamatan/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
    function edit($id_kecamatan)
    {
        $kecamatan = $this->Crud_model->listingOne('tbl_kecamatan', 'id_kecamatan', $id_kecamatan);
        $zonasi = $this->Crud_model->listing('tbl_zonasi');
        $valid = $this->form_validation;
        $valid->set_rules('nama_kecamatan', 'Nama Kecamatan', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'id_kecamatan'      => $kecamatan->id_kecamatan,
                'nama_kecamatan'      => $this->input->post('nama_kecamatan'),
                'id_zonasi'      => $this->input->post('id_zonasi')
            );
            $this->Crud_model->edit('tbl_kecamatan', 'id_kecamatan', $id_kecamatan, $data);
            $this->session->set_flashdata('msg', 'Kecamatan diedit');
            redirect('admin/kecamatan', 'refresh');
        }
        $data = [
            'title'     => 'Kecamatan || Ananda Private',
            'kecamatan'  => $kecamatan,
            'zonasi'  => $zonasi,
            'content'   => 'admin/kecamatan/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_kecamatan)
    {
        $this->Crud_model->delete('tbl_kecamatan', 'id_kecamatan', $id_kecamatan);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/kecamatan');
    }
}
