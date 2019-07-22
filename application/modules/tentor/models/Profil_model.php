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

    public function listingBimbingan($field, $where)
    {
        $this->db->select('tbl_online.*,
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
                        tbl_tentor.foto,
                        tbl_tentor.banner,
                        tbl_tentor.pekerjaan,
                        tbl_tentor.nama_lengkap')
            ->from('tbl_online')
            ->join('tbl_kursus', 'tbl_kursus.id_kursus = tbl_online.id_kursus', 'LEFT')
            //foreign key dari foreign key
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kursus.id_kategori', 'LEFT')
            ->join('tbl_paket', 'tbl_paket.id_paket = tbl_online.id_paket', 'LEFT')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_online.id_jenjang', 'LEFT')
            ->join('tbl_tingkat', 'tbl_tingkat.id_tingkat = tbl_online.id_tingkat', 'LEFT')
            ->join('tbl_tentor', 'tbl_tentor.id_tentor = tbl_online.id_tentor', 'LEFT')
            ->join('tbl_waktu', 'tbl_waktu.id_waktu = tbl_online.id_waktu', 'LEFT')
            ->where($field, $where);
        return $this->db->get();
    }
}
