<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('curlconfig');
		$this->load->model('sedes_model');
		$this->load->model('categoriaServicios_model');
		$this->datos = array(
			'mensaje' => '',
			'error' => 0,
			'datos' => array()
		);
	}

	public function index()
	{
		$reply = $this->sedes_model->findSedes();
		$servicios = $this->categoriaServicios_model->getCategoriasServicios();
		// var_dump($servicios);

		$frontData['getSedes'] = $reply;
		$frontData['getServicios'] = $servicios;
		$this->load->view('index', $frontData);
	}
}
