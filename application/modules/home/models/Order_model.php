<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Order_model extends CI_Model
{

    function listingOne($id_order)
    {
        $this->db->select('tbl_order.*,
                        tbl_kursus.nama_kursus,
                        tbl_kursus.harga,
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
                        tbl_tentor.nama_lengkap')
            ->from('tbl_order')
            ->join('tbl_kursus', 'tbl_kursus.id_kursus = tbl_order.id_kursus', 'LEFT')
            //foreign key dari foreign key
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kursus.id_kategori', 'LEFT')
            ->join('tbl_paket', 'tbl_paket.id_paket = tbl_order.id_paket', 'LEFT')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_order.id_jenjang', 'LEFT')
            ->join('tbl_tingkat', 'tbl_tingkat.id_tingkat = tbl_order.id_tingkat', 'LEFT')
            ->join('tbl_tentor', 'tbl_tentor.id_tentor = tbl_order.id_tentor', 'LEFT')
            ->join('tbl_waktu', 'tbl_waktu.id_waktu = tbl_order.id_waktu', 'LEFT')
            ->where('tbl_order.id_order', $id_order);
        return $this->db->get()->row();
    }

    function listingZonasiSiswa($id_user)
    {
        $this->db->select('tbl_siswa.*,
                        tbl_kecamatan.id_zonasi,
                        tbl_user.role,')
            ->from('tbl_siswa')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_siswa.id_kecamatan', 'LEFT')
            ->join('tbl_user', 'tbl_user.id_user = tbl_siswa.id_user', 'LEFT')
            ->where('tbl_siswa.id_user', $id_user);
        return $this->db->get()->row();
    }

    // function listingZonasi($id_zonasi)
    // {
    //     $this->db->select('tbl_Tentor.*,
    //                     tbl_kecamatan.nama_kecamatan,
    //                     tbl_kecamatan.id_zonasi')
    //         ->from('tbl_Tentor')
    //         ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_Tentor.id_kecamatan', 'LEFT')
    //         ->where('id_zonasi', $id_zonasi);
    //     // ->where('role', 'Siswa')
    //     // ->where('id_provinsi', '76');
    //     return $this->db->get()->result();
    // }

    function listingZonasi($id_zonasi, $id_kursus)
    {
        $this->db->select('tbl_kompetensi.*,
                        tbl_tentor.nama_lengkap,
                        tbl_tentor.pekerjaan,
                        tbl_tentor.banner,
                        tbl_tentor.foto,
                        tbl_tentor.gender,
                        tbl_tentor.id_kecamatan,
                        tbl_tentor.id_kabupaten,
                        tbl_kecamatan.id_zonasi')
            ->from('tbl_kompetensi')
            ->join('tbl_tentor', 'tbl_tentor.id_tentor = tbl_kompetensi.id_tentor', 'LEFT')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_tentor.id_kecamatan', 'LEFT')
            ->where(array('id_kursus' => $id_kursus, 'id_zonasi' => $id_zonasi, 'is_aktif' => '1'));
        // ->where('id_zonasi', $id_zonasi)
        // ->where('tbl_kompetensi.id_kursus', $id_kursus);
        // ->where('role', 'Siswa')
        // ->where('id_provinsi', '76');
        return $this->db->get()->result();
    }
}
