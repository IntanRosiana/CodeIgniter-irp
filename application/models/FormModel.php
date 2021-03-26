<?php

class FormModel extends CI_Model {
	public function insert($data) {
		return $this->db->insert('form', $data);
	}
	public function AllData() {
		$query = $this->db->get('form');
		return $query->result();
		
		
	}
}

