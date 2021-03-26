<?php

class FormModel extends CI_Model {
	public function insert($data) {
		return $this->db->insert('form', $data);
	}

	public function AllData() {
		$query = $this->db->get('form');
		return $query->result();
	}

	public function getById($id) {
		$query = $this->db->get_where('form', array('id_fir' => $id));
		return $query->result();
	}
}

