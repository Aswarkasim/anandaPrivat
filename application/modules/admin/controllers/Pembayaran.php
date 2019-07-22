<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
    }


    public function index()
    {
        $pembayaran = $this->Crud_model->listing('tbl_pembayaran');
        $data = [
            'title'         => 'Manajemen Pembayaran',
            'pembayaran'    => $pembayaran,
            'content'   => 'admin/pembayaran/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail($id_pembayaran)
    {
        $pembayaran = $this->Crud_model->listingOne('tbl_pembayaran', 'id_pembayaran', $id_pembayaran);

        $abcd = $this->input->post('is_valid');
        $valid = $this->form_validation->set_rules('is_valid', 'Status', 'required|callback_select_validate');
        if ($valid->run()) {
            $order = $this->Crud_model->listingOne('tbl_order', 'id_order', $pembayaran->id_order);
            $valid = $this->input->post('is_valid');


            if ($valid == "Valid") {
                $online = $this->Crud_model->listingOne('tbl_online', 'id_order', $pembayaran->id_order);
                if ($online) {
                    $this->session->set_flashdata('msg_er', 'Kelas telah ditambah');
                } else if ($online == "") {
                    $dataOnline = [
                        'id_online'     => 'OL' . random_string('numeric', '8'),
                        'id_order'      => $pembayaran->id_order,
                        'id_siswa'      => $order->id_siswa,
                        'id_kursus'     => $order->id_kursus,
                        'id_paket'      => $order->id_paket,
                        'id_waktu'      => $order->id_waktu,
                        'id_jenjang'    => $order->id_jenjang,
                        'id_tingkat'    => $order->id_tingkat,
                        'id_tentor'     => $order->id_tentor,
                        'is_done'       => 'Berjalan',
                        'is_aktif'      => 'Aktif'
                    ];
                    $this->Crud_model->add('tbl_online', $dataOnline);
                }
            } else if ($valid = "Unvalid") {
                $online = $this->Crud_model->listingOne('tbl_pembayaran', 'id_order', $pembayaran->id_order);
                if ($online) {
                    $this->Crud_model->delete('tbl_online', 'id_order', $pembayaran->id_order);
                    $this->session->set_flashdata('msg', 'Kelas dibatalkan');
                }
            }
            $data = [
                'is_valid' => $valid
            ];

            $this->Crud_model->edit('tbl_pembayaran', 'id_pembayaran', $id_pembayaran, $data);
            $this->session->set_flashdata('msg', 'Status diubah');
            redirect('admin/pembayaran/detail/' . $id_pembayaran);
        }

        $data = [
            'title'    => 'Manajemen Pembayaran',
            'pembayaran'    => $pembayaran,
            'content'   => 'admin/pembayaran/detail'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function konfirmasi($id_pembayaran)
    {


        $pembayaran = $this->Crud_model->listingOne('tbl_pembayaran', 'id_pembayaran', $id_pembayaran);
        $order = $this->Crud_model->listingOne('tbl_order', 'id_order', $pembayaran->id_order);
        $valid = $this->input->post('is_valid');


        if ($valid == "Valid") {
            $dataOnline = [
                'id_siswa'      => $order->id_siswa,
                'id_kursus'     => $order->id_kursus,
                'id_paket'      => $order->id_paket,
                'id_waktu'      => $order->id_waktu,
                'id_jenjang'    => $order->id_jenjang,
                'id_tingkat'    => $order->id_tingkat,
                'id_tentor'     => $order->id_tentor,
                'is_done'       => 'Berjalan',
                'is_aktif'      => 'Aktif'
            ];
            $this->Crud_model->add('tbl_online', $dataOnline);
        }
        $data = [
            'is_valid' => $valid
        ];

        $this->Crud_model->edit('tbl_pembayaran', 'id_pembayaran', $id_pembayaran, $data);
        $this->session->set_flashdata('msg', 'Status diubah');
        redirect('admin/pembayaran/detail/' . $id_pembayaran);
    }

    function select_validate($abcd)
    {
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', 'Anda belum memilih daftar sebagai');
            return false;
        } else {
            return true;
        }
    }
}
