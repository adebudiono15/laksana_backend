<?php 

class Content_model extends CI_model {

	public function getAllData($table)
		{
			return $this->db->get($table);
		}

	public function hapusContent($id) 
	{
		$this->db->where('id', $id);
		$this->db->delete('content_satu');
	}

	public function edit_content($where,$table)
		{
			return $this->db->get_where($table, $where);

		}

	public function update_content($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	public function update_tentang($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}


	
}