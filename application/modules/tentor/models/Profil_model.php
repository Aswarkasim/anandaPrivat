<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{

    function listing()
    {
        $this->db->select('tbl_tentor.*,
                            tbl_user.nama_user,
                            tbl_user.email,
                            ')
            ->from('tbl_tentor')
            ->join('tbl_user', 'tbl_user.id_user = tbl_tentor.id_user', 'LEFT');
        return $this->db->get()->result();
    }

    function listingOne($id_user)
    {
        $this->db->select('tbl_tentor.*,
                            tbl_user.nama_user,
                            tbl_user.email,
                            ')
            ->from('tbl_tentor')
            ->join('tbl_user', 'tbl_user.id_user = tbl_tentor.id_user', 'LEFT')
            ->where('tbl_tentor.id_user', $id_user);
        return $this->db->get()->row();
    }

    function fetch_kursus()
    {
        $query = $this->db->get('tbl_kursus');
        return $query->result();
    }
}
