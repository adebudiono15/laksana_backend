<?php 

class Panel_model extends CI_model {

	public function getAllData($table)
		{
			return $this->db->get($table);
		}

	public function hapusPanel($id) 
	{
		$this->db->where('id', $id);
		$this->db->delete('panel');
	}

	public function edit_panel($where,$table)
		{
			return $this->db->get_where($table, $where);

		}

	public function update_panel($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	
}