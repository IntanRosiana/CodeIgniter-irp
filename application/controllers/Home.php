<?php

class Home extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();

		$this->load->model('FormModel');
	}
	public function index () {
		$AllData = $this->FormModel->AllData();
		$data = array(
			'AllData' => $AllData
		);

		$this->load->view('Form-intern', $data);;
	}
	public function profile () {
		echo 'Ini halaman profile';
	}
}
