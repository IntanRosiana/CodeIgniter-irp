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

	public function update($id, $data) {
		$this->db->where('id_fir', $id);
		$query = $this->db->update('form', $data);
		return $query;

	}

	public function delete($id) {
		$query = $this->db->delete('form', array('id_fir' => $id));
		return $query;
	}
}

