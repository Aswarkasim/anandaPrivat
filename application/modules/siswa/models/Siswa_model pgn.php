<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function listingKeranjang($field, $id_siswa, $limit, $start)
    {
        $this->db->select('tbl_order.*,
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
            ->limit($limit, $start)
            ->where($field, $id_siswa);
        return $this->db->get();
    }

    public function listingTagihan($field, $id_siswa)
    {
        $this->db->select('tbl_tagihan.*,
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
                        tbl_tentor.nama_lengkap')
            ->from('tbl_tagihan')
            ->join('tbl_kursus', 'tbl_kursus.id_kursus = tbl_tagihan.id_kursus', 'LEFT')
            //foreign key dari foreign key
            ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kursus.id_kategori', 'LEFT')
            ->join('tbl_paket', 'tbl_paket.id_paket = tbl_tagihan.id_paket', 'LEFT')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_tagihan.id_jenjang', 'LEFT')
            ->join('tbl_tingkat', 'tbl_tingkat.id_tingkat = tbl_tagihan.id_tingkat', 'LEFT')
            ->join('tbl_tentor', 'tbl_tentor.id_tentor = tbl_tagihan.id_tentor', 'LEFT')
            ->join('tbl_waktu', 'tbl_waktu.id_waktu = tbl_tagihan.id_waktu', 'LEFT')
            ->where($field, $id_siswa);
        return $this->db->get();
    }

    public function listingOnline($field, $where, $limit, $start)
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
            ->limit($limit, $start)
            ->where($field, $where);
        return $this->db->get();
    }
    public function listingNotif($field, $where, $limit, $start)
    {
        $this->db->select('tbl_notif.*,
                        tbl_siswa.nama_lengkap,
                        tbl_user.nama_user as nama_admin')
            ->from('tbl_notif')
            ->join('tbl_user', 'tbl_user.id_user = tbl_notif.id_admin', 'LEFT')
            ->join('tbl_siswa', 'tbl_siswa.id_siswa = tbl_notif.id_user', 'LEFT')
            ->limit($limit, $start)
            ->where($field, $where);
        return $this->db->get();
    }

    function fetch_provinsi()
    {
        $this->db->order_by('nama_provinsi', 'ASC');
        $query = $this->db->get('tbl_provinsi');
        return $query->result();
    }

    function fetch_kabupaten($id_provinsi)
    {
        $this->db->where('id_provinsi', $id_provinsi);
        $this->db->order_by('nama_kabupaten', 'ASC');
        $query = $this->db->get('tbl_kabupaten');
        $output = '<option value="">Kota / Kabupaten</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id_kabupaten . '">' . $row->nama_kabupaten . '</option>';
        }
        return $output;
    }

    function fetch_kecamatan($id_kabupaten)
    {
        $this->db->where('id_kabupaten', $id_kabupaten);
        $this->db->order_by('nama_kecamatan', 'ASC');
        $query = $this->db->get('tbl_kecamatan');
        $output = '<option value="">Kecamatan</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id_kecamatan . '">' . $row->nama_kecamatan . '</option>';
        }
        return $output;
    }
}
