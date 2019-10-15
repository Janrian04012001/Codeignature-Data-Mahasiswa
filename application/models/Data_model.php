<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('mahasiswa')
				 ->order_by('id_mh', 'ASC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this -> db -> insert("mahasiswa", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($id_mh)
	{
		
		$query = $this -> db -> where("id_mh", $id_mh)
				->get("mahasiswa");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}	

	public function hapus($id)
	{
		
		$query = $this -> db -> delete("mahasiswa", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this -> db -> update("mahasiswa", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}
}