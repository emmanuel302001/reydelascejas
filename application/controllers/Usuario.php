<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('perfil_model');
  }

  public function index()
  {
    $user_profile['data'] = $this->getInfoUser();
    if ($this->session->userdata('login')) {
      $this->load->view('/pages/profile/index', $user_profile);
    } else {
      redirect(site_url("index"));
    }
  }

  private function getInfoUser()
  {
    if ($this->session->userdata('login')) {
      $id_usuario = $this->session->userdata('user_id');
      $result = $this->perfil_model->getInfoUserById($id_usuario);
      return $result;
    }
  }

  public function updateProfile()
  {
    $name = $this->input->post('name_profile');
    $lastname = $this->input->post('lastname_profile');
    $direccion = $this->input->post('location_profile');
    $ciudad = $this->input->post('city_profile');
    $telefono = $this->input->post('phone_profile');
    $birthday = $this->input->post('birthday_profile');
    $documento = $this->input->post('documento_profile');
    $passwd = $this->input->post('passwd_profile');

    $result = $this->updateUserInfo($name, $lastname, $direccion, $ciudad, $telefono, $birthday, $documento, $passwd);
    echo json_encode($result);
  }

  private function updateUserInfo($name, $lastname, $direccion, $ciudad, $telefono, $birthday, $documento, $passwd)
  {
    if ($this->session->userdata('login')) {
      $id_usuario = $this->session->userdata('user_id');

      $result = $this->perfil_model->updateUserInfo($id_usuario, $name, $lastname, $direccion, $ciudad, $telefono, $birthday, $documento, $passwd);
      return $result;
    } else {
      return false;
    }
  }
}
