<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Poin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in('Tentor');
    }


    public function index()
    {
        $id_tentor = $this->session->userdata('id_user');
        $order = $this->Crud_model->listingOneAll('tbl_order_poin', 'id_tentor', $id_tentor);
        $tentor = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_tentor);
        $pencairan = $this->Crud_model->listingOneAll('tbl_pencairan', 'id_tentor', $id_tentor);


        $data = [
            'title'     => 'Ananda Private || Poin',
            'order'     => $order,
            'tentor'    => $tentor,
            'pencairan' => $pencairan,
            'content'   => 'tentor/poin/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }


    function add()
    {
        $this->load->helper('string');

        $id_user = $this->session->userdata('id_user');

        $valid = $this->form_validation;
        $valid->set_rules('jumlah_poin', 'Jumlah Poin', 'required', array('required' => ' %s harus diisi'));
        $valid->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required', array('required' => ' %s harus diisi'));
        $abcd = $this->input->post('metode');
        $valid = $this->form_validation->set_rules('metode', 'Bukti', 'required|callback_select_validate');

        if ($valid->run()) {
            if (!empty($_FILES['bukti']['name'])) {
                $config['upload_path']   = './assets/uploads/pembayaran/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('bukti')) {
                    $data = array(
                        'title'     => 'Upload Payment',
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'tentor/poin/add'
                    );
                    $this->load->view('layout/wrapper', $data);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;
                    $data = array(
                        'id_order_poin' => 'OP' . random_string('numeric', '8'),
                        'id_tentor'     => $id_user,
                        'jumlah_bayar'  => $i->post('jumlah_bayar'),
                        'jumlah_poin'   => $i->post('jumlah_poin'),
                        'metode'        => $i->post('metode'),
                        'is_read'       => '0',
                        'date_created'  => date_time('Y-m-d'),
                        'bukti'         => $upload_data['uploads']['file_name']
                    );
                    $this->Crud_model->add('tbl_order_poin', $data);
                    $this->session->set_flashdata('msg', 'Data telah disimpan');

                    redirect('tentor/poin/index/', 'refresh');
                }
            }
        }
        $data = array(
            'title'         => 'Ananda Privat || Pembayaran',
            'content'       => 'tentor/poin/add'
        );
        $this->load->view('layout/wrapper', $data);
    }


    function select_validate($abcd)
    {
        // 'none' is the first option that is default "-------Choose City-------"
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', '%s tidak boleh kosong');
            return false;
        } else {
            // User picked something.
            return true;
        }
    }

    function pencairan()
    {
        $id_tentor = $this->session->userdata('id_user');
        $tentor = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_tentor);
        $poin = $tentor->poin;
        $poinCair = $this->input->post('poin');

        if ($poin < 200000) {
            $this->session->set_flashdata('msg_er', 'Poin mencapai batas minimal');
            redirect('tentor/poin', 'refresh');
        } else if ($poin < $poinCair) {
            $this->session->set_flashdata('msg_er', 'Poin tidak mencukupi');
            redirect('tentor/poin', 'refresh');
        } else {
            $dataPoin = [
                'poin'  => $poin - $poinCair
            ];
            $this->Crud_model->edit('tbl_tentor', 'id_tentor', $id_tentor, $dataPoin);
            $data =  [
                'id_tentor'     => $id_tentor,
                'poin'          => $poinCair,
                'is_done'       => 0
            ];
            $this->Crud_model->add('tbl_pencairan', $data);
            $this->session->set_flashdata('msg', 'Data pencairan telah dikirim, silakan tunggu konfirmasi');
            redirect('tentor/poin', 'refresh');
        }
    }
}

/* End of file Poin.php */
