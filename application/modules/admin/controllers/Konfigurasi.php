<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi extends CI_Controller
{

    function index()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/konfigurasi/add',
            'konfigurasi'  => $konfigurasi,
            'content'   => 'admin/konfigurasi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function textConf()
    {
        $valid = $this->form_validation;
        $valid->set_rules('nama_web', 'Nama Web', 'required', ['required' => '%s tidak boleh kosong']);

        if ($valid->run()) {
            $data = array(
                'nama_web'      => $this->input->post('nama_web'),
                'judul_utama'   => $this->input->post('judul_utama'),
                'email'   => $this->input->post('email'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'tentang'       => $this->input->post('tentang'),
                'fb'            => $this->input->post('fb'),
                'ig'            => $this->input->post('ig'),
                'yt'            => $this->input->post('yt'),
                'tw'            => $this->input->post('tw'),
                'link_video'    => $this->input->post('link_video'),
            );
            $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
            $this->session->set_flashdata('msg', 'konfigurasi diedit');
            redirect('admin/konfigurasi', 'refresh');
        }
    }

    function gambar()
    {
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
        $data = [
            'title'   => 'Registrasi || Ananda Private',
            'add'       => 'admin/konfigurasi/add',
            'konfigurasi'  => $konfigurasi,
            'content'   => 'admin/konfigurasi/gambar'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function logo()
    {
        $valid = $this->form_validation;
        $valid->set_rules('bantu', 'Logo', 'required', ['required' => '%s tidak boleh kosong']);
        if (empty($_FILES['logo']['name'])) {
            $valid->set_rules('logo', 'Logo', 'required', ['required' => '%s tidak boleh kosong']);
        }

        if ($valid->run()) {
            if (!empty($_FILES['logo']['name'])) {
                $config['upload_path']   = './assets/uploads/konfigurasi/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('logo')) {
                    redirect('admin/konfigurasi');
                    // $data = [
                    //     'title'     => 'Kursus || Ananda Private',
                    //     'error'     => $this->upload->display_errors(),
                    //     'content'   => 'admin/kursus/add'
                    // ];
                    // $this->load->view('layout/wrapper', $data, FALSE);
                } else {
                    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
                    if ($konfigurasi->logo != "") {
                        unlink('./assets/uploads/konfigurasi/' . $konfigurasi->logo);
                    }
                    $upload_data = array('uploads' => $this->upload->data());
                    $data = array(
                        'logo'          => $upload_data['uploads']['file_name']
                    );
                    $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                    $this->session->set_flashdata('msg', 'Logo diubah');

                    redirect('admin/konfigurasi/gambar', 'refresh');
                }
            }
        }
    }



    function banner_main()
    {

        // $aa = $this->input->post('bantuBannerMain');
        // if ($aa) {
        //     echo 'vsfdss';
        // }
        if (!empty($_FILES['banner_main']['name'])) {
            // echo 'aa';
            // die;
            $config['upload_path']   = './assets/uploads/konfigurasi/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('banner_main')) {
                redirect('admin/konfigurasi');
            } else {
                $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
                if ($konfigurasi->banner_main != "") {
                    unlink('./assets/uploads/konfigurasi/' . $konfigurasi->banner_main);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $data = array(
                    'banner_main'          => $upload_data['uploads']['file_name']
                );
                $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                $this->session->set_flashdata('msg', 'Banner utama diubah');

                redirect('admin/konfigurasi/gambar', 'refresh');
            }
        }
    }
    function sub_banner()
    {

        // $aa = $this->input->post('bantuBannerMain');
        // if ($aa) {
        //     echo 'vsfdss';
        // }
        if (!empty($_FILES['sub_banner']['name'])) {
            // echo 'aa';
            // die;
            $config['upload_path']   = './assets/uploads/konfigurasi/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sub_banner')) {
                redirect('admin/konfigurasi');
            } else {
                $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
                if ($konfigurasi->sub_banner != "") {
                    unlink('./assets/uploads/konfigurasi/' . $konfigurasi->sub_banner);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $data = array(
                    'sub_banner'          => $upload_data['uploads']['file_name']
                );
                $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                $this->session->set_flashdata('msg', 'Banner utama diubah');

                redirect('admin/konfigurasi/gambar', 'refresh');
            }
        }
    }
    function banner_char_1()
    {

        // $aa = $this->input->post('bantuBannerMain');
        // if ($aa) {
        //     echo 'vsfdss';
        // }
        if (!empty($_FILES['banner_char_1']['name'])) {
            // echo 'aa';
            // die;
            $config['upload_path']   = './assets/uploads/konfigurasi/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('banner_char_1')) {
                redirect('admin/konfigurasi');
            } else {
                $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
                if ($konfigurasi->banner_char_1 != "") {
                    unlink('./assets/uploads/konfigurasi/' . $konfigurasi->banner_char_1);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $data = array(
                    'banner_char_1'          => $upload_data['uploads']['file_name']
                );
                $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                $this->session->set_flashdata('msg', 'Banner utama diubah');

                redirect('admin/konfigurasi/gambar', 'refresh');
            }
        }
    }
    function banner_char_2()
    {

        // $aa = $this->input->post('bantuBannerMain');
        // if ($aa) {
        //     echo 'vsfdss';
        // }
        if (!empty($_FILES['banner_char_2']['name'])) {
            // echo 'aa';
            // die;
            $config['upload_path']   = './assets/uploads/konfigurasi/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('banner_char_2')) {
                redirect('admin/konfigurasi');
            } else {
                $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
                if ($konfigurasi->banner_char_2 != "") {
                    unlink('./assets/uploads/konfigurasi/' . $konfigurasi->banner_char_2);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $data = array(
                    'banner_char_2'          => $upload_data['uploads']['file_name']
                );
                $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                $this->session->set_flashdata('msg', 'Banner utama diubah');

                redirect('admin/konfigurasi/gambar', 'refresh');
            }
        }
    }
    function banner_char_3()
    {

        // $aa = $this->input->post('bantuBannerMain');
        // if ($aa) {
        //     echo 'vsfdss';
        // }
        if (!empty($_FILES['banner_char_3']['name'])) {
            // echo 'aa';
            // die;
            $config['upload_path']   = './assets/uploads/konfigurasi/';
            $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
            $config['max_size']      = '24000'; // KB 
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('banner_char_3')) {
                redirect('admin/konfigurasi');
            } else {
                $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
                if ($konfigurasi->banner_char_3 != "") {
                    unlink('./assets/uploads/konfigurasi/' . $konfigurasi->banner_char_3);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $data = array(
                    'banner_char_3'          => $upload_data['uploads']['file_name']
                );
                $this->Crud_model->edit('tbl_konfigurasi', 'id_konfigurasi', '1', $data);
                $this->session->set_flashdata('msg', 'Banner utama diubah');

                redirect('admin/konfigurasi/gambar', 'refresh');
            }
        }
    }
}
