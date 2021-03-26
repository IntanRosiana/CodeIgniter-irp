<?php

class Form extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$this->load->model('FormModel');
	}
	public function index() {
		$this->load->view('form-internship');
	}
	public function insert() {
		$id_fir = $this->input->post('id_fir');
		$date = $this->input->post('date');
		$position_title = $this->input->post('position_title');		
		$company = $this->input->post('company');
		$report_to = $this->input->post('report_to');
		$departement = $this->input->post('departement');
		$brand = $this->input->post('brand');
		$location = $this->input->post('location');
		$education_background = $this->input->post('degree');
		$dayefectif_month = $this->input->post('dayefectif_month');
		$day_used = $this->input->post('day_used');
		$umr_default = $this->input->post('umr_default');
		$presentation = $this->input->post('presentation');
		$result_insentif = $this->input->post('result_insentif');
		$total_insentif = $this->input->post('total_insentif');

		$data = array(
			'id_fir' => $id_fir,
			'date' => $date,
			'position_title' => $position_title,
			'company' => $company,
			'report_to' => $report_to,
			'departement' => $departement,
			'brand' => $brand,
			'location' => $location,
			'education_background' => $education_background,
			'dayefectif_month' => $dayefectif_month,
			'day_used' => $day_used,
			'umr_default' => $umr_default,
			'presentation' => $presentation,
			'result_insentif' => $result_insentif,
			'total_insentif' => $total_insentif,
		);
		
		$insert = $this->FormModel->insert($data);

		if($insert) {
			echo 'Data Berhasil di Input !';
		} else {
			echo 'Data gagal di input';
		}
	}
	public function update () {
		$id = $this->input->get('id');
		$dataForm = $this->FormModel->getById($id);
		$data = array(
			'dataForm' => $dataForm[0],
			'test' => 'test'
		);
		$this->load->view('form-internship-update', $data);
	}
}
