<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function existeUser($user_mail)
  {
    $this->db->where("EMAIL", $user_mail);
    $resultado = $this->db->get("tbls_usuarios");
    if ($resultado->num_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function login($user_mail, $user_passwd)
  {
    $query = $this->db->select('EMAIL, USUARIO_ACTIVO')
      ->where('EMAIL', $user_mail)
      ->get('tbls_usuarios');
    if ($query->row_array()['USUARIO_ACTIVO'] == 1) {
      if ($query->num_rows() > 0) {
        $resultado = $this->db->select("*")
          ->where("EMAIL", $user_mail)
          ->where("CONTRASENIA", $user_passwd)
          ->get('tbls_usuarios');

        if ($resultado->num_rows() > 0) {
          return $resultado->row_array();
        } else {
          return false;
        }
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}
