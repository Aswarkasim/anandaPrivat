<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alamat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/alamat_model');
        $this->load->model('siswa/profil_model');

        //if (($this->session->userdata('id_user') == "") || $this->session->userdata('role') != "Siswa") { }
        is_logged_in('Siswa');
    }

    function index()
    {
        $id_user = $this->session->userdata('id_user');
        $alamat  = $this->alamat_model->listingOne($id_user);

        // if (empty($alamat)) {

        //     redirect('siswa/alamat/add', 'refresh');
        // } else {


        $data = [
            'alamat'    => $alamat,
            'content'   => 'siswa/profil/editalamat'
        ];

        $this->load->view('layout/wrapper', $data);
        //  }
    }



    function edit()
    {

        $id_user = $this->session->userdata('id_user');
        $alamat  = $this->alamat_model->listingOne($id_user);


        $valid = $this->form_validation;

        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => 'alamat tidak boleh kosong']);

        if ($valid->run() === false) {

            $data = [
                'content'   => 'siswa/profil/edit_alamat',
                'alamat'    => $alamat,
                'provinsi'  =>  $this->alamat_model->fetch_provinsi()
            ];

            $this->load->view('layout/wrapper', $data);
        } else {
            $i = $this->input;
            $data = [
                'id_user'       => $id_user,
                'id_provinsi'   => $i->post('provinsi'),
                'id_kabupaten' => $i->post('kabupaten'),
                'id_kecamatan' => $i->post('kecamatan'),
                'alamat'       => $i->post('alamat')

            ];

            $this->Crud_model->edit('tbl_siswa', 'id_siswa', $id_user, $data);
            $this->session->set_flashdata('msg', 'disimpan');
            redirect('siswa/alamat');
        }
    }

    function add()
    {

        $id_user = $this->session->userdata('id_user');
        $valid = $this->form_validation;

        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => 'alamat tidak boleh kosong']);

        if ($valid->run() === false) {

            $data = [
                'content'   => 'siswa/profil/alamat',
                'provinsi'  =>  $this->alamat_model->fetch_provinsi()
            ];

            $this->load->view('layout/wrapper', $data);
        } else {
            $i = $this->input;
            $data = [
                'id_user'       => $id_user,
                'id_provinsi'   => $i->post('provinsi'),
                'id_kabupaten' => $i->post('kabupaten'),
                'id_kecamatan' => $i->post('kecamatan'),
                'alamat'       => $i->post('alamat')

            ];

            $this->Crud_model->edit('tbl_siswa', 'id_siswa', $id_user, $data);
            $this->session->set_flashdata('msg', 'disimpan');
            redirect('siswa/alamat');
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
