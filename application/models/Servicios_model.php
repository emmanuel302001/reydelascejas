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
    $query = $this->db->select('tblp_servicios.*, tblp_categoria_servicios.nombre as categoria')
      ->from('tblp_servicios')
      ->join('tblp_categoria_servicios', 'tblp_categoria_servicios.id_categoria = tblp_servicios.id_categoria')
      ->where('tblp_servicios.visible', 0)
      ->where('tblp_categoria_servicios.resume_name', $category)
      ->get();
    return $query->result_array();
  }
}

/* End of file Servicios_model.php */
/* Location: ./application/models/Servicios_model.php */