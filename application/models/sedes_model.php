<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sedes_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function findSedes()
  {
    $this->db->where('MOSTRAR_SEDE', 1);
    $this->db->where('SEDE_ACTIVA', 1);
    $resultado = $this->db->get("tblp_sedes");
    return $resultado->result_array();
  }
}
