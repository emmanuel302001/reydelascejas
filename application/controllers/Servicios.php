<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicios extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('sedes_model');
    $this->load->model('categoriaServicios_model');
    $this->load->model('servicios_model');
  }

  public function index()
  {
    $reply = $this->sedes_model->findSedes();
    $servicios = $this->categoriaServicios_model->getCategoriasServicios();

    $frontData['getSedes'] = $reply;
    $frontData['getServicios'] = $servicios;

    $page = $this->input->get('p');
    $frontData['servicios'] = $this->servicios_model->getServiciosByCategory($page);
    $result['datos'] = $frontData;
    if (empty($page)) {
      redirect(site_url("principal"));
    } else {
      $this->load->view('/pages/servicios/listar', $result);
    }
  }
}
