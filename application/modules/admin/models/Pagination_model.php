<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_model extends CI_Model {

	public function getAllKabupaten()
	{
		$query = $this->db->get('tbl_kabupaten');
        return $query->result();
	}

	public function getKabupaten($limit, $start)
	{
		$query = $this->db->get('tbl_kabupaten', $limit, $start);
        return $query->result();
	}

	public function countAllKabupaten()
	{
		$query = $this->db->get('tbl_kabupaten');
		return $query->num_rows();
		
	}

}

/* End of file Pagination_model.php */
/* Location: ./application/modules/tentor/models/Pagination_model.php */