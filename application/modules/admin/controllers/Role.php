<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{

    public function index()
    {
        $role = $this->Crud_model->listing('tbl_role');
        $data = [
            'role'      => $role,
            'content'   => 'admin/role/index'
        ];

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */
