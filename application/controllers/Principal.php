<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('curlconfig');
		$this->load->model('Sedes_model');
		$this->load->model('categoriaServicios_model');
		$this->datos = array(
			'mensaje' => '',
			'error' => 0,
			'datos' => array()
		);
	}

	public function index()
	{
		$reply = $this->Sedes_model->findSedes();
		$servicios = $this->categoriaServicios_model->getCategoriasServicios();
		// $urlSedes = base_url('index.php/api/sedes/getSedes');
		// $chSedes = array('url' => $urlSedes, 'methodType' => 'GET', 'datos' => array(''));
		// $apiSedes = executeCurl($chSedes);

		$frontData['getSedes'] = $reply;
		$frontData['getServicios'] = $servicios;
		$result['datos'] = $frontData;
		$this->load->view('index', $result);
	}
}
