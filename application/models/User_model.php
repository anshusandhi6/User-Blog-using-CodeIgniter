<?php


class User_model extends CI_Model {

	public function return_user()
	{

		$this->load->database();
		$query = $this->db->query("SELECT * FROM `user`");
		$query->result_array();
		return $query->result_array();
	}
}

	?>