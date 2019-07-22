<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
    }


    public function index()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_user', 'Nama lengkap', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules(
            'email',
            'Email',
            'required|is_unique[tbl_user.email]',
            [
                'required'  => '%s tidak boleh kosong',
                'is_unique' => '%s <strong> ' . $this->input->post('email') . '</strong> telah ada. Silakan masukkan email baru'
            ]
        );
        $valid->set_rules('password', 'Password', 'required|min_length[6]', [
            'required'      => '%s tidak boleh kosong',
            'min_length'    => '%s minimal 6 karakter'
        ]);
        $valid->set_rules('re_password', 'Password', 'required|matches[password]', [
            'required'      => '%s tidak boleh kosong',
            'matches'       => '%s yang anda masukkan tidak sama'
        ]);

        $abcd = $this->input->post('role');
        $valid = $this->form_validation->set_rules('role', 'Role', 'required|callback_select_validate');


        if ($valid->run()) {

            $i = $this->input;
            $role = $this->input->post('role');
            $prefix = "";
            if ($role == "Siswa") {
                $prefix = "SIS";
            } else if ($role == "Tentor") {
                $prefix == "TEN";
            }



            $data = array(
                'id_user'       => $prefix . random_string('numeric', '8'),
                'nama_user'     => $i->post('nama_user'),
                'email'         => $i->post('email'),
                'role'          => $i->post('role'),
                'is_aktif'      => 1,
                'password'      => sha1($i->post('password'))
            );

            $field = "";
            if ($role == "Siswa") {
                $dataTab = array(
                    'id_siswa'       => $data['id_user'],
                    'id_user'       => $data['id_user'],
                );
            } else if ($role == "Tentor") {
                $dataTab = array(
                    'id_tentor'       => $data['id_user'],
                    'id_user'       => $data['id_user'],
                );
            }



            $this->Crud_model->add('tbl_user', $data);
            $table = "";
            if ($i->post('role') == "Siswa") {
                $table = 'tbl_siswa';
            } else if ($i->post('role') == "Tentor") {
                $table = 'tbl_tentor';
            }
            $this->Crud_model->add($table, $dataTab);
            $this->session->set_flashdata('msg', 'Anda telah terdaftar, silakan login');

            redirect('home', 'refresh');
        }


        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'content'   => 'home/register/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    // Below function is called for validating select option field.
    function select_validate($abcd)
    {
        // 'none' is the first option that is default "-------Choose City-------"
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', 'Anda belum memilih daftar sebagai');
            return false;
        } else {
            // User picked something.
            return true;
        }
    }
}
