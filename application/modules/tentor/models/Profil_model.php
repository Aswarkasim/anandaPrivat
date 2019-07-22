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
                            tbl_alamat.alamat
                            ')
            ->from('tbl_tentor')
            ->join('tbl_user', 'tbl_user.id_user = tbl_tentor.id_user', 'LEFT')
            ->join('tbl_alamat', 'tbl_alamat.alamat = tbl_tentor.alamat', 'LEFT')
            ->where('tbl_tentor.id_user', $id_user);
        return $this->db->get()->row();
    }

    function listingKompetensi($id_tentor)
    {
        $this->db->select('tbl_kompetensi.*,
                            tbl_tentor.nama_lengkap,
                            tbl_kursus.nama_kursus,
                            tbl_jenjang.nama_jenjang
                            ')
            ->from('tbl_kompetensi')
            ->join('tbl_tentor', 'tbl_tentor.id_tentor = tbl_kompetensi.id_tentor', 'LEFT')
            ->join('tbl_kursus', 'tbl_kursus.id_kursus = tbl_kompetensi.id_kursus', 'LEFT')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_kompetensi.id_jenjang', 'LEFT')
            ->where('tbl_kompetensi.id_tentor', $id_tentor)
            ->order_by('tbl_kompetensi.date_created', 'desc');
        return $this->db->get()->result();
    }

    function listingAlamat($id_user)
    {
        $this->db->select('tbl_alamat.*,
                            tbl_kecamatan.nama_kecamatan,
                            tbl_kabupaten.nama_kabupaten,
                            tbl_provinsi.nama_provinsi
                        ')
            ->from('tbl_alamat')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_alamat.id_kecamatan', 'LEFT')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_alamat.id_kabupaten', 'LEFT')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_alamat.id_provinsi', 'LEFT')
            ->where('tbl_alamat.id_user', $id_user);
        return $this->db->get()->row();
    }
}
