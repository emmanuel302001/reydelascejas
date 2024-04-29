<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('curlconfig');
		$this->load->model('sedes_model');
		$this->datos = array(
			'mensaje' => '',
			'error' => 0,
			'datos' => array()
		);
	}

	public function index()
	{
		$reply = $this->sedes_model->findSedes();
		// $urlSedes = base_url('index.php/api/sedes/getSedes');
		// $chSedes = array('url' => $urlSedes, 'methodType' => 'GET', 'datos' => array(''));
		// $apiSedes = executeCurl($chSedes);

		$frontData['getSedes'] = $reply;
		$result['datos'] = $frontData;
		$this->load->view('index', $result);
	}
}
