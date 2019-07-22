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

    public function listingBimbingan($field, $where)
    {
        $this->db->select('tbl_online.*,
                        tbl_siswa.nama_lengkap,
                        tbl_siswa.alamat,
                        tbl_siswa.gender,
                        tbl_kursus.nama_kursus,
                        tbl_kursus.harga,
                        tbl_kursus.icon,
                        tbl_kursus.id_kategori,
                        tbl_kategori.nama_kategori,
                        tbl_paket.hari,
                        tbl_paket.jumlah_pertemuan,
                        tbl_paket.nama_paket,
                        tbl_waktu.awal,
                        tbl_waktu.akhir,
                        tbl_waktu.nama_waktu,
                        tbl_jenjang.nama_jenjang,
                        tbl_tingkat.nama_tingkat,
                        tbl_siswa.foto,
                        tbl_siswa.banner')
            ->from('tbl_online')
            ->join('tbl_kursus', 'tbl_kursus.id_kursus = tbl_online.id_kursus', 'LEFT')
            //foreign key dari foreign key
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kursus.id_kategori', 'LEFT')
            ->join('tbl_paket', 'tbl_paket.id_paket = tbl_online.id_paket', 'LEFT')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_online.id_jenjang', 'LEFT')
            ->join('tbl_tingkat', 'tbl_tingkat.id_tingkat = tbl_online.id_tingkat', 'LEFT')
            ->join('tbl_siswa', 'tbl_siswa.id_siswa = tbl_online.id_siswa', 'LEFT')
            ->join('tbl_waktu', 'tbl_waktu.id_waktu = tbl_online.id_waktu', 'LEFT')
            ->where($field, $where);
        return $this->db->get();
    }
}
