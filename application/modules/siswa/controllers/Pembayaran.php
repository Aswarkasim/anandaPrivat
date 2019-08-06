<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/Siswa_model', 'SM');
        is_logged_in('Siswa');
    }


    public function index($id_order)
    {
        is_read('tbl_order', 'id_order', $id_order);

        $id_user = $this->session->userdata('id_user');
        $order = $this->SM->listingKeranjang('id_order', $id_order)->row();
        $pembayaran = $this->Crud_model->listingOne('tbl_pembayaran', 'id_order', $id_order);


        if (empty($pembayaran)) {
            redirect('siswa/pembayaran/add/' . $id_order);
        } else {
            $data = [
                'title'         => 'Edit Profil',
                'order'         => $order,
                'pembayaran'    => $pembayaran,
                'content'       => 'siswa/pembayaran/index'
            ];

            $this->load->view('layout/wrapper', $data);
        }
    }


    function add($id_order)
    {
        $order = $this->SM->listingKeranjang('id_order', $id_order)->row();

        $id_user = $this->session->userdata('id_user');

        $valid = $this->form_validation;
        $valid->set_rules(
            'tanggal',
            'Tanggal Pembayaran',
            'required',
            array('required' => ' %s harus diisi')
        );
        if ($valid->run()) {
            if (!empty($_FILES['bukti']['name'])) {
                $config['upload_path']   = './assets/uploads/pembayaran/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('bukti')) {
                    $data = array(
                        'title'     => 'Upload Payment',
                        'order'      => $order,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'siswa/pembayaran/add'
                    );
                    $this->load->view('layout/wrapper', $data);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;
                    $data = array(
                        'id_user'                   => $id_user,
                        'id_order'                   => $id_order,
                        'asal'                      => $i->post('asal'),
                        'tanggal'                   => $i->post('tanggal'),
                        'metode'                    => $i->post('metode'),
                        'is_valid'                    => 'Menunggu',
                        'is_read'                    => '0',
                        'bukti'                     => $upload_data['uploads']['file_name']
                    );
                    $this->Crud_model->add('tbl_pembayaran', $data);
                    $this->session->set_flashdata('msg', 'Data telah disimpan');

                    redirect('siswa/pembayaran/index/' . $id_order, 'refresh');
                }
            }
        }
        $data = array(
            'title'         => 'Ananda Privat || Pembayaran',
            'order'         => $order,
            'content'       => 'siswa/pembayaran/add'
        );
        $this->load->view('layout/wrapper', $data);
    }


    function edit($id_order)
    {
        //$order = $this->SM->listingKeranjang('id_order', $id_order)->row();
        $pembayaran = $this->Crud_model->listingOne('tbl_pembayaran', 'id_order', $id_order);

        $id_user = $this->session->userdata('id_user');

        $valid = $this->form_validation;
        $valid->set_rules(
            'tanggal',
            'Tanggal Pembayaran',
            'required',
            array('required' => ' %s harus diisi')
        );
        if ($valid->run()) {
            if (!empty($_FILES['bukti']['name'])) {
                $config['upload_path']   = './assets/uploads/pembayaran/';
                $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
                $config['max_size']      = '24000'; // KB 
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('bukti')) {
                    $data = array(
                        'title'     => 'Upload Payment',
                        //'order'      => $order,
                        'pembayaran'      => $pembayaran,
                        'error'     => $this->upload->display_errors(),
                        'content'   => 'siswa/pembayaran/edit'
                    );
                    $this->load->view('layout/wrapper', $data);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());

                    $i = $this->input;
                    $data = array(
                        'id_user'                   => $id_user,
                        'id_order'                   => $id_order,
                        'asal'                      => $i->post('asal'),
                        'tanggal'                   => $i->post('tanggal'),
                        'metode'                    => $i->post('metode'),
                        'bukti'                     => $upload_data['uploads']['file_name']
                    );
                    $this->Crud_model->edit('tbl_pembayaran', 'id_order', $id_order, $data);
                    $this->session->set_flashdata('msg', 'Data telah disimpan');

                    redirect('siswa/pembayaran/index/' . $id_order, 'refresh');
                }
            } else {
                $i = $this->input;
                $data = array(
                    'id_user'                   => $id_user,
                    'id_order'                   => $id_order,
                    'asal'                      => $i->post('asal'),
                    'tanggal'                   => $i->post('tanggal'),
                    'metode'                    => $i->post('metode'),
                    'is_valid'                    => 'Menunggu',
                    'is_read'                    => '0'
                );
                $this->Crud_model->edit('tbl_pembayaran', 'id_order', $id_order, $data);
                $this->session->set_flashdata('msg', 'Data telah disimpan');

                redirect('siswa/pembayaran/index/' . $id_order, 'refresh');
            }
        }
        $data = array(
            'title'         => 'Ananda Privat || Pembayaran',
            'pembayaran'         => $pembayaran,
            'content'       => 'siswa/pembayaran/edit'
        );
        $this->load->view('layout/wrapper', $data);
    }
}

/* End of file Pembayaran.php */
