<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Alamat_model extends CI_Model
{
	function listingOne($id_user)
	{
		$this->db->select('tbl_alamat.*,
                            tbl_kabupaten.nama_kabupaten,
                            tbl_provinsi.nama_provinsi,
                            tbl_kecamatan.nama_kecamatan
                            ')
            ->from('tbl_alamat')
            ->join('tbl_kabupaten', 'tbl_kabupaten.id_kabupaten = tbl_alamat.id_kabupaten', 'LEFT')
            ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan = tbl_alamat.id_kecamatan', 'LEFT')
            ->join('tbl_provinsi', 'tbl_provinsi.id_provinsi = tbl_alamat.id_provinsi', 'LEFT')
            ->where('tbl_alamat.id_user', $id_user);
        return $this->db->get()->row();
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
		foreach($query->result() as $row)
		{
			$output .= '<option value="'.$row->id_kabupaten.'">'.$row->nama_kabupaten.'</option>';
		}
		return $output;
	}

	function fetch_kecamatan($id_kabupaten)
	{
		$this->db->where('id_kabupaten', $id_kabupaten);
		$this->db->order_by('nama_kecamatan', 'ASC');
		$query = $this->db->get('tbl_kecamatan');
		$output = '<option value="">Kecamatan</option>';
		foreach($query->result() as $row)
		{
			$output .= '<option value="'.$row->id_kecamatan.'">'.$row->nama_kecamatan.'</option>';
		}
		return $output;
	}
    
}