<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perfil_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getInfoUserById($id_usuario)
  {
    $query = $this->db->where('ID_USUARIO', $id_usuario)
      ->get('tbls_usuarios');
    return $query->row_array();
  }

  public function updateUserInfo($id_usuario, $name, $lastname, $direccion, $ciudad, $telefono, $birthday, $documento, $passwd)
  {
    $this->db->set('NOMBRES', $name)
      ->set('APELLIDOS', $lastname)
      ->set('DIRECCION', $direccion)
      ->set('CIUDAD', $ciudad)
      ->set('TELEFONO', $telefono)
      ->set('BIRTHDAY', $birthday)
      ->set('IDENTIFICACION', $documento)
      ->where('ID_USUARIO', $id_usuario);

    if (!empty($passwd)) {
      $this->db->set('CONTRASENIA', md5($passwd));
    }
    $query = $this->db->update('tbls_usuarios');
    return $query;
  }
}
