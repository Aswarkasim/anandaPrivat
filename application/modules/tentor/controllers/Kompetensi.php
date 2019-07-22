<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kompetensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
        $this->load->model('tentor/Profil_model', 'PM');
    }


    public function index()
    {

        $id_user = $this->session->userdata('id_user');
        $user = $this->Crud_model->listingOne('tbl_tentor', 'id_tentor', $id_user);
        $kompetensi = $this->PM->listingKompetensi($id_user);
        $kursus = $this->Crud_model->listing('tbl_kursus');
        $jenjang = $this->Crud_model->listing('tbl_jenjang');


        $data = [
            'title'         => "Kompetensi " . $user->nama_lengkap,
            'kursus'        => $kursus,
            'jenjang'       => $jenjang,
            'kompetensi'    => $kompetensi,
            'profil'        => $user,
            'content'       => 'tentor/kompetensi/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function add()
    {
        $id_tentor = $this->session->userdata('id_user');

        $valid = $this->form_validation;
        $valid->set_rules('id_kursus', 'Kursus', 'required', ['required' => '%s tidak boleh kosong']);
        $valid->set_rules('id_jenjang', 'jenjang', 'required', ['required' => '%s tidak boleh kosong']);

        $abcd = $this->input->post('id_kursus');
        $abcd = $this->input->post('id_jenjang');
        $valid = $this->form_validation->set_rules('id_kursus', 'Kursus', 'required|callback_select_validate');
        $valid = $this->form_validation->set_rules('id_jenjang', 'Jenjang', 'required|callback_select_validate');

        if ($valid->run() === FALSE) {

            $this->index();
        } else {
            $data = array(
                'id_kompetensi'     => 'KM' . random_string('numeric', '4'),
                'id_tentor'         => $id_tentor,
                'id_kursus'         => $this->input->post('id_kursus'),
                'id_jenjang'        => $this->input->post('id_jenjang')
            );
            $this->Crud_model->add('tbl_kompetensi', $data);
            $this->session->set_flashdata('msg', 'Kompetensi ditambahkan');
            redirect('tentor/kompetensi', 'refresh');
        }
    }

    function select_validate($abcd)
    {
        if ($abcd == "none") {
            $this->form_validation->set_message('select_validate', 'Anda belum memilih %s');
            return false;
        } else {
            return true;
        }
    }
}

/* End of file Poin.php */
