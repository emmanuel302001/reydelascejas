<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoriaServicios_model extends CI_Model
{


  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getCategoriasServicios()
  {
    $query = $this->db->where('visible', 0)
      ->get('tblp_categoria_servicios');
    return $query->result_array();
  }
}
