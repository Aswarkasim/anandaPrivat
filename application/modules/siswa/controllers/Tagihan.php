<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/Siswa_model', 'SM');
        if (($this->session->userdata('id_user') == "") && ($this->session->userdata('role') != "Siswa")) {
            redirect('home');
        }
    }

    public function index()
    {
        $id_siswa = $this->session->userdata('id_user');
        $tagihan = $this->SM->listingTagihan('id_siswa', $id_siswa)->result();

        $data = [
            'title'     => 'Edit Profil',
            'tagihan'   => $tagihan,
            'content'   => 'siswa/tagihan/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    function buatTagihanOne($id_order)
    {


        // $buatTagihan = date('d-m-Y h:i:s');
        // $tiga_hari   = mktime(0, 0, 0, date('n'), date('j') + 3, date('Y'));
        // $expired     = date("d-m-Y h:is", $tiga_hari);

        $id_user = $this->session->userdata('id_user');
        $order = $this->Crud_model->listingOne('tbl_order', 'id_order', $id_order);
        $i = $this->input;
        $data = [
            'id_tagihan'    => 'AP#TGHN#' . random_string('numeric', '10'),
            'id_siswa'      => $id_user,
            'id_kursus'     => $order->id_kursus,
            'id_paket'      => $order->id_paket,
            'id_waktu'      => $order->id_waktu,
            'id_jenjang'    => $order->id_jenjang,
            'id_tingkat'    => $order->id_tingkat,
            'id_tentor'     => $order->id_tentor,
            'is_fix'        => 'Menunggu Pembayaran',
            'total_tagihan' => $order->total,
            'metode'        => $i->post('metode'),
            'status'        => 'Belum dibayar'
        ];
        $this->Crud_model->add('tbl_tagihan', $data);
        $this->Crud_model->delete('tbl_order', 'id_order', $id_order);
        $this->session->set_flashdata('msg', 'Tagian dibuat');
        redirect('siswa/tagihan');
    }

    function uploadBukti()
    {
        $id_peserta = $this->session->userdata('id_peserta');

        $valid = $this->form_validation;
        $valid->set_rules(
            'tanggal',
            'Tanggal',
            'required',
            array('required' => ' %s harus diisi')
        );

        if ($valid->run()) {
            if (!empty($_FILES['bukti']['name'])) {
                $config['upload_path']   = './assets/uploads/images/payment/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('bukti')) {

                    $data = array(
                        'title'     => 'Upload Payment',
                        'error'     => $this->upload->display_errors(),
                        'isi'       => 'siswa/tagihan/index'
                    );
                    $this->load->view('layout/wrapper', $data);
                } else {

                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;
                    $data = array(
                        'id_peserta'                => $id_peserta,
                        'bukti_pembayaran'          => $upload_data['uploads']['file_name']
                    );
                    $this->Crud_model->add('tbl_konfirmasi_pembayaran', $data);
                    $this->session->set_flashdata('msg', 'Data telah disimpan');

                    redirect('payment', 'refresh');
                }
            }
        }
    }
}
