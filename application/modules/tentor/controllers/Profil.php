<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentor/Profil_model', 'PM');
    }


    public function index()
    {
        $id_tentor = $this->session->userdata('id_user');
        // $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
        $tentor = $this->PM->listingOne($id_tentor);
        $bimbingan = $this->PM->listingBimbingan('tbl_online.id_tentor', $id_tentor, '3')->result();

        $data = [
            'title'     => $tentor->nama_lengkap,
            'tentor'    => $tentor,
            'bimbingan' => $bimbingan,
            'content'   => 'tentor/profil/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }


    public function edit($id_tentor)
    {
        $profil = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_tentor);

        $valid = $this->form_validation;
        $valid->set_rules('nama_lengkap', 'Nama Lengkap', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('alamat', 'Alamat', 'required', ['required' => '%s tidak boleh kosong']);


        if ($valid->run()) {
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path']   = './assets/uploads/images/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    $data = [
                        'title'     => 'Edit Profil',
                        'profil'    => $profil,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'tentor/profil/edit'
                    ];
                    $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;

                    $data = array(
                        'id_tentor'     => $id_tentor,
                        'id_user'       => $id_tentor,
                        'nama_lengkap'  => $i->post('nama_lengkap'),
                        'pekerjaan'     => $i->post('pekerjaan'),
                        'no_telp'       => $i->post('no_telp'),
                        'id_kota'       => $i->post('id_kota'),
                        'id_provinsi'   => $i->post('id_provinsi'),
                        'id_kecamatan'  => $i->post('id_kecamatan'),
                        'alamat'        => $i->post('alamat'),
                        'about'         => $i->post('about'),
                        'fb'            => $i->post('fb'),
                        'twitter'       => $i->post('twitter'),
                        'ig'            => $i->post('ig'),
                        'foto'        => $upload_data['uploads']['file_name']
                    );
                    if ($profil->foto != "") {
                        unlink('./assets/uploads/images/' . $profil->foto);
                    }
                    $this->Crud_model->edit('tbl_tentor', 'id_tentor', $id_tentor, $data);
                    $this->session->set_flashdata('msg', 'Profil diedit');

                    redirect('tentor/profil', 'refresh');
                }
            } else {
                $i = $this->input;

                $data = array(
                    'id_tentor'     => $id_tentor,
                    'id_user'       => $id_tentor,
                    'pekerjaan'     => $i->post('pekerjaan'),
                    'nama_lengkap'  => $i->post('nama_lengkap'),
                    'no_telp'       => $i->post('no_telp'),
                    'id_kota'       => $i->post('id_kota'),
                    'id_provinsi'   => $i->post('id_provinsi'),
                    'id_kecamatan'  => $i->post('id_kecamatan'),
                    'alamat'        => $i->post('alamat'),
                    'gender'        => $i->post('gender'),
                    'about'         => $i->post('about'),
                    'fb'            => $i->post('fb'),
                    'twitter'       => $i->post('twitter'),
                    'ig'            => $i->post('ig'),
                );
                $this->Crud_model->edit('tbl_tentor', 'id_tentor', $id_tentor, $data);
                $this->session->set_flashdata('msg', 'Profil diedit');

                redirect('tentor/profil', 'refresh');
            }
        }


        $data = [
            'title'     => 'Edit Profil',
            'profil'    => $profil,
            'content'   => 'tentor/profil/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function general()
    { }

    function ubahPassword()
    {
        $id_user = $this->session->userdata('id_user');
        $tentor = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

        $valid = $this->form_validation;



        $valid->set_rules(
            'password_lama',
            'Password lama',
            'required',
            [
                'required' => '%s tidak boleh kosong',
            ]
        );
        $valid->set_rules(
            'password_baru',
            'Password Baru',
            'required',
            [
                'required' => '%s tidak boleh kosong',
            ]
        );
        $valid->set_rules(
            're_password',
            'Re Password',
            'required|matches[password_baru]',
            [
                'required' => '%s tidak boleh kosong',
                'matches' => '%s tidak sama',
            ]
        );

        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Ubah Password',
                'content'   => 'tentor/profil/gantipassword'
            ];
            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            if ($tentor->password == sha1($i->post('password_lama'))) {
                $data = array(
                    'password'        => sha1($i->post('password_baru')),
                );
                $this->Crud_model->edit('tbl_user', 'id_user', $id_user, $data);
                $this->session->set_flashdata('msg', ' Password diganti');
                redirect(base_url('tentor/profil/ubahPassword'), 'refresh');
            } else {
                $data = [
                    'title'     => 'Ubah Password',
                    'pesan_er'  => 'Password lama tidak sama',
                    'content'   => 'tentor/profil/gantipassword'
                ];
                $this->load->view('layout/wrapper', $data, FALSE);
            }
        }
    }

    function alamat()
    {
        $data = [
            'title'     => 'Ubah Password',
            'pesan_er'  => 'Password lama tidak sama',
            'content'   => 'tentor/profil/alamat'
        ];
        $this->load->view('layout/wrapper', $data, FALSE);
    }


    public function sampul()
    {
        $id_tentor = $this->session->userdata('id_user');
        $profil = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_tentor);

        $valid = $this->form_validation;
        $valid->set_rules('bantu', 'Foto', 'required', ['required' => '%s besdflum dipilih']);
        // if (!empty($_FILES['banner']['name'])) {
        //     $valid->set_rules('banner', 'Foto', 'required', ['required' => '%s belum dipilih']);
        // }


        if ($valid->run()) {
            if (!empty($_FILES['banner']['name'])) {
                $config['upload_path']   = './assets/uploads/banners/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('banner')) {
                    $data = [
                        'title'     => 'Edit Profil',
                        'profil'    => $profil,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'tentor/profil/sampul'
                    ];
                    $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;

                    $data = array(
                        'banner'        => $upload_data['uploads']['file_name']
                    );
                    if ($profil->banner != "") {
                        unlink('./assets/uploads/banners/' . $profil->banner);
                    }
                    $this->Crud_model->edit('tbl_tentor', 'id_tentor', $id_tentor, $data);
                    $this->session->set_flashdata('msg', 'Sampul diedit');

                    redirect('tentor/profil', 'refresh');
                }
            }
        }


        $data = [
            'title'     => 'Edit Profil',
            'profil'    => $profil,
            'content'   => 'tentor/profil/sampul'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
