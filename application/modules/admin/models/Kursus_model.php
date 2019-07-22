<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kursus_model extends CI_Model
{
    function listing()
    {
        $this->db->select('tbl_kursus.*,
                        tbl_user.nama_user,
                        tbl_kategori.nama_kategori')
            ->from('tbl_kursus')
            ->join('tbl_user', 'tbl_user.id_user = tbl_kursus.id_user', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kursus.id_kategori', 'LEFT');
        return $this->db->get()->result();
    }
    function listingOneKursus($id_kursus)
    {
        $this->db->select('tbl_kursus.*,
                        tbl_user.nama_user,
                        tbl_kategori.nama_kategori')
            ->from('tbl_kursus')
            ->join('tbl_user', 'tbl_user.id_user = tbl_kursus.id_user', 'LEFT')
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kursus.id_kategori', 'LEFT')
            ->where('id_kursus', $id_kursus);
        return $this->db->get()->row();
    }

    function listingTingkat()
    {
        $this->db->select('tbl_tingkat.*,
                        tbl_jenjang.nama_jenjang')
            ->from('tbl_tingkat')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_tingkat.id_jenjang', 'LEFT');
        return $this->db->get()->result();
    }
    function listingKab()
    {
        $this->db->select('tbl_kabupaten.*,
                        tbl_provinsi.nama_provinsi')
            ->from('tbl_kabupaten')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_kabupaten.id_provinsi', 'LEFT');
        return $this->db->get()->result();
    }
    function listingKec()
    {
        $this->db->select('tbl_kecamatan.*,
                        tbl_kabupaten.id_provinsi,
                        tbl_kabupaten.nama_kabupaten')
            ->from('tbl_kecamatan')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_kecamatan.id_kabupaten', 'LEFT');
        return $this->db->get()->result();
    }

    public function listingOnline()
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
            ->order_by('date_created', 'DESC');
        return $this->db->get()->result();
    }

    public function listingOnlineOne($id_online)
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
            ->where('id_online', $id_online);
        return $this->db->get()->row();
    }
}
