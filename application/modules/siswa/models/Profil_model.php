<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{

    function listingOne($id_user)
    {
        $this->db->select('tbl_siswa.*,
                            tbl_user.nama_user,
                            tbl_user.email,
                            ')
            ->from('tbl_siswa')
            ->join('tbl_user', 'tbl_user.id_user = tbl_siswa.id_user', 'LEFT')
            ->where('tbl_siswa.id_user', $id_user);
        return $this->db->get()->row();
    }
}
