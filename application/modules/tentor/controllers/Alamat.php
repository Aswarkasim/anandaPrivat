<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alamat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentor/alamat_model');
        $this->load->model('tentor/profil_model');
    }

    function index()
    {
        $id_user = $this->session->userdata('id_user');
        $alamat  = $this->alamat_model->listingOne($id_user);

        if (empty($alamat)) {

            redirect('tentor/alamat/add', 'refresh');
        } else {


            $data = [
                'alamat'    => $alamat,
                'content'   => 'tentor/profil/editalamat'
            ];

            $this->load->view('layout/wrapper', $data);
        }
    }



    function edit($id_alamat)
    {

        $id_user = $this->session->userdata('id_user');
        $alamat  = $this->Crud_model->listingOne('tbl_alamat', 'id_user', $id_user);


        $valid = $this->form_validation;

        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => 'alamat tidak boleh kosong']);

        if ($valid->run() === false) {

            $data = [
                'content'   => 'tentor/profil/edit',
                'alamat'    => $alamat,
                'provinsi'  =>  $this->alamat_model->fetch_provinsi()
            ];

            $this->load->view('layout/wrapper', $data);
        } else {
            $i = $this->input;
            $data = [
                'id_user' => $this->session->userdata('id_user'),
                'id_provinsi'  => $i->post('provinsi'),
                'id_kabupaten' => $i->post('kabupaten'),
                'id_kecamatan' => $i->post('kecamatan'),
                'alamat'       => $i->post('alamat')

            ];

            $this->Crud_model->edit('tbl_alamat', 'id_alamat', $id_alamat, $data);
            $this->session->set_flashdata('msg', 'diedit');
            redirect('tentor/alamat');
        }
    }

    function add()
    {


        $valid = $this->form_validation;

        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => 'alamat tidak boleh kosong']);

        if ($valid->run() === false) {

            $data = [
                'content'   => 'tentor/profil/alamat',
                'provinsi'  =>  $this->alamat_model->fetch_provinsi()
            ];

            $this->load->view('layout/wrapper', $data);
        } else {
            $i = $this->input;
            $data = [
                'id_user' => $this->session->userdata('id_user'),
                'id_provinsi' => $i->post('provinsi'),
                'id_kabupaten' => $i->post('kabupaten'),
                'id_kecamatan' => $i->post('kecamatan'),
                'alamat'       => $i->post('alamat')

            ];

            $this->Crud_model->add('tbl_alamat', $data);
            $this->session->set_flashdata('msg', 'ditambahkan');
            redirect('tentor/alamat');
        }
    }

    function fetch_kabupaten()
    {
        if ($this->input->post('id_provinsi')) {
            echo $this->alamat_model->fetch_kabupaten($this->input->post('id_provinsi'));
        }
    }

    function fetch_kecamatan()
    {
        if ($this->input->post('id_kabupaten')) {
            echo $this->alamat_model->fetch_kecamatan($this->input->post('id_kabupaten'));
        }
    }
}
