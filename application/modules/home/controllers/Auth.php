<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $i          = $this->input;
        $email      = $i->post('email');
        $password   = $i->post('password');
        $cek_login  = $this->Crud_model->login($email, $password);
        //print_r($email); die;

        if (!empty($cek_login) == 1) {
            $s = $this->session;
            $s->set_userdata('id_user', $cek_login->id_user);
            $s->set_userdata('email', $cek_login->email);
            $s->set_userdata('nama_user', $cek_login->nama_user);
            $s->set_userdata('role', $cek_login->role);
            $s->set_userdata('is_aktif', $cek_login->is_aktif);

            $this->session->set_flashdata('msg', 'Anda telah login');
            $role = $this->session->userdata('role');
            if ($role == "Admin") {
                redirect(base_url('admin/profil'), 'refresh');
            } else if ($role == "Tentor") {
                redirect(base_url('tentor/profil'), 'refresh');
            } else if ($role == "Siswa") {
                redirect(base_url('siswa/profil'), 'refresh');
            } else {
                redirect('error');
            }

            redirect(base_url('admin/profil'), 'refresh');
        } else {
            $this->session->set_flashdata('msg_er', 'Email atau password salah!');
            redirect('home');
        }
    }

    function logout()
    {
        $s = $this->session;
        $s->unset_userdata('id_user');
        $s->unset_userdata('email');
        $s->unset_userdata('nama_user');
        $s->unset_userdata('role');
        $s->unset_userdata('is_aktif');
        $this->session->set_flashdata('msg', 'Anda telah logout');
        redirect('home', 'refresh');
    }
}


// $role = $this->session->userdata;
// if ($role == "Admin") {
//     redirect(base_url('admin/profil'), 'refresh');
// } else if ($role == "Tentor") {
//     redirect(base_url('tentor/profil'), 'refresh');
// } else if ($role == "Siswa") {
//     redirect(base_url('tentor/profil'), 'refresh');
// } else {
