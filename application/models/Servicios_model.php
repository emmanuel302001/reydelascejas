<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicios_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getServiciosByCategory($category)
  {
    $query = $this->db->select('tblp_categoria_servicios.nombre as categoria, tblp_servicios.*')
      ->from('tblp_categoria_servicios')
      ->join('tblp_servicios', 'tblp_servicios.id_categoria = tblp_categoria_servicios.id_categoria', 'left')
      ->where('tblp_categoria_servicios.visible', 0)
      ->where('tblp_categoria_servicios.resume_name', $category)
      ->get();
    return $query->result_array();
  }
}

/* End of file Servicios_model.php */
/* Location: ./application/models/Servicios_model.php */