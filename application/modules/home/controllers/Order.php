<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tentor/Profil_model', 'm');
        $this->load->model('admin/Kursus_model', 'k');
        $this->load->model('home/Order_model', 'o');
        $this->load->helper('string');

        if ($this->session->userdata('id_user') == "" && $this->session->userdata('role') != "siswa") {
            $this->session->set_flashdata('msg_er', 'Anda belum login sebagai siswa');
            redirect('home', 'refresh');
        }
    }


    public function buat_order($id_kursus)
    {

        $kursus = $this->k->listingOneKursus($id_kursus);
        $paket = $this->Crud_model->listing('tbl_paket');
        $jenjang = $this->Crud_model->listing('tbl_jenjang');
        $tingkat = $this->Crud_model->listing('tbl_tingkat');
        $waktu = $this->Crud_model->listing('tbl_waktu');
        $tentor = $this->m->listing();
        $valid = $this->form_validation;

        $abcd = $this->input->post('id_paket');
        $valid = $this->form_validation->set_rules('id_paket', 'Paket', 'required|callback_select_validate');
        $abcd = $this->input->post('id_waktu');
        $valid = $this->form_validation->set_rules('id_waktu', 'Waktu', 'required|callback_select_validate');
        $abcd = $this->input->post('id_jenjang');
        $valid = $this->form_validation->set_rules('id_jenjang', 'Jenjang', 'required|callback_select_validate');
        $abcd = $this->input->post('id_tingkat');
        $valid = $this->form_validation->set_rules('id_tingkat', 'Tingkat', 'required|callback_select_validate');
        $abcd = $this->input->post('id_tentor');
        $valid = $this->form_validation->set_rules('id_tentor', 'Tentor', 'required|callback_select_validate');


        if ($valid->run() === FALSE) {
            $data = [
                'title'     => 'Ananda Private || Pilih Kursus',
                'paket'     => $paket,
                'jenjang'   => $jenjang,
                'tingkat'   => $tingkat,
                'waktu'     => $waktu,
                'tentor'    => $tentor,
                'kursus'    => $kursus,
                'content'   => 'home/order/index'
            ];

            $this->load->view('layout/wrapper', $data, FALSE);
        } else {
            $id_siswa = $this->session->userdata('id_user');
            $i = $this->input;
            $data = array(
                'id_order'          => random_string('numeric', '10'),
                'id_siswa'          => $id_siswa,
                'id_kursus'         => $id_kursus,
                'id_paket'          => $i->post('id_paket'),
                'id_waktu'          => $i->post('id_waktu'),
                'id_jenjang'        => $i->post('id_jenjang'),
                'id_tingkat'        => $i->post('id_tingkat'),
                'id_tentor'         => $i->post('id_tentor'),
                'total'             => $kursus->harga,
                'is_valid'            => '0'
            );
            $this->Crud_model->add('tbl_order', $data);
            $this->session->set_flashdata('msg', 'Data telah disimpan');
            //$this->orderData($data['id_order']);
            redirect(base_url('home/order/finish/' . $data['id_order']), 'refresh');
        }
    }

    function orderData($id_order)
    {
        $order = $this->Crud_model->listingOne('tbl_order', 'id_order', $id_order);
    }

    function finish($id_order)
    {
        $order = $this->o->listingOne($id_order);

        $data = [
            'title'    => 'Ananda Private || Order Kursus',
            'order'     => $order,
            'content'   => 'home/order/finish'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }


    function select_validate($abcd)
    {
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', '%s belum dipilih');
            return false;
        } else {
            return true;
        }
    }
}
