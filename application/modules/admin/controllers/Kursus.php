<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kursus extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kursus_model');
        $this->load->helper('string');

        if (($this->session->userdata('id_user') == "") || $this->session->userdata('role') != "Admin") {
            redirect('error');
        }
    }


    public function index()
    {
        $kursus = $this->Kursus_model->listing();
        $data = [
            'title'    => 'Ananda Private || Manajemen Kursus',
            'add'       => 'admin/kursus/add',
            'kursus'    => $kursus,
            'content'   => 'admin/kursus/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }



    public function add()
    {

        $kategori = $this->Crud_model->listing('tbl_kategori');
        $valid = $this->form_validation;
        $valid->set_rules('nama_kursus', 'Nama Kursus', 'required', ['required' => '%s tidak boleh kosong']);
        if (empty($_FILES['icon']['name'])) {
            $valid->set_rules('icon', 'Icon', 'required', ['required' => '%s tidak boleh kosong']);
        }
        $valid->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => '%s tidak boleh kosong']);


        if ($valid->run()) {
            if (!empty($_FILES['icon']['name'])) {
                $config['upload_path']   = './assets/uploads/icons/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('icon')) {
                    $data = [
                        'title'     => 'Kursus || Ananda Private',
                        'kategori'  => $kategori,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'admin/kursus/add'
                    ];
                    $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;

                    $data = array(
                        'id_kursus'     => 'KS' . random_string('numeric', '4'),
                        'id_user'       => $this->session->userdata('id_user'),
                        'nama_kursus'   => $i->post('nama_kursus'),
                        'deskripsi'     => $i->post('deskripsi'),
                        'id_kategori'     => $i->post('id_kategori'),
                        'is_aktif'      => $i->post('is_aktif'),
                        'icon'          => $upload_data['uploads']['file_name']
                    );
                    $this->Crud_model->add('tbl_kursus', $data);
                    $this->session->set_flashdata('msg', 'Kelas ditambah');

                    redirect('admin/kursus', 'refresh');
                }
            }
        }


        $data = [
            'title'     => 'Registrasi',
            'kategori'  => $kategori,
            'content'   => 'admin/kursus/add'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function edit($id_kursus)
    {
        $kursus = $this->Crud_model->listingOne('tbl_kursus', 'id_kursus', $id_kursus);
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $valid = $this->form_validation;
        $valid->set_rules('nama_kursus', 'Nama Kursus', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => '%s tidak boleh kosong']);


        if ($valid->run()) {
            if (!empty($_FILES['icon']['name'])) {
                $config['upload_path']   = './assets/uploads/icons/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('icon')) {
                    $data = [
                        'title'     => 'Edit Kursus',
                        'kursus'    => $kursus,
                        'kategori'  => $kategori,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'admin/kursus/edit'
                    ];
                    $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;

                    $data = array(
                        'id_kursus'     => $id_kursus,
                        'id_user'       => $this->session->userdata('id_user'),
                        'nama_kursus'   => $i->post('nama_kursus'),
                        'deskripsi'     => $i->post('deskripsi'),
                        'id_kategori'     => $i->post('id_kategori'),
                        'is_aktif'      => $i->post('is_aktif'),
                        'icon'          => $upload_data['uploads']['file_name']
                    );
                    if ($kursus->icon != "") {
                        unlink('./assets/uploads/icons/' . $kursus->icon);
                    }
                    $this->Crud_model->edit('tbl_kursus', 'id_kursus', $id_kursus, $data);
                    $this->session->set_flashdata('msg', 'Kursus diedit');

                    redirect('admin/kursus', 'refresh');
                }
            } else {
                $i = $this->input;

                $data = array(
                    'id_kursus'     => $id_kursus,
                    'id_user'       => $this->session->userdata('id_user'),
                    'nama_kursus'   => $i->post('nama_kursus'),
                    'id_kategori'   => $i->post('id_kategori'),
                    'deskripsi'     => $i->post('deskripsi'),
                    'is_aktif'      => $i->post('is_aktif')
                );
                $this->Crud_model->edit('tbl_kursus', 'id_kursus', $id_kursus, $data);
                $this->session->set_flashdata('msg', 'Kursus diedit');

                redirect('admin/kursus', 'refresh');
            }
        }


        $data = [
            'title'     => 'Edit Kursus',
            'kursus'    => $kursus,
            'kategori'  => $kategori,
            'content'   => 'admin/kursus/edit'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function delete($id_kursus)
    {
        $this->Crud_model->delete('tbl_kursus', 'id_kursus', $id_kursus);
        $this->session->set_flashdata('msg', 'dihapus');
        redirect('admin/kursus');
    }

    function status($id_kursus)
    {
        $kursus = $this->Crud_model->listingOne('tbl_kursus', 'id_kursus', $id_kursus);
        if ($kursus->is_aktif == "1") {
            $data = ['is_aktif' => 0];
            $this->Crud_model->edit('tbl_kursus', 'id_kursus', $id_kursus, $data);
            $this->session->set_flashdata('msg', $kursus->nama_kursus . ' disable');
            redirect('admin/kursus');
        } else {
            $data = ['is_aktif' => 1];
            $this->Crud_model->edit('tbl_kursus', 'id_kursus', $id_kursus, $data);
            $this->session->set_flashdata('msg',  $kursus->nama_kursus . ' enable');
            redirect('admin/kursus');
        }
    }
}
