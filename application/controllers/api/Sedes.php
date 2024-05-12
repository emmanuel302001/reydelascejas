<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class Sedes extends RestController
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('sedes_model');
    $this->dataResponse = array(
      'message' => '',
      'error' => 0,
      'reply' => array()
    );
  }

  public function getSedes_get()
  {
    $reply = $this->sedes_model->findSedes();
    $this->dataResponse['reply'] = $reply;
    $this->response($this->dataResponse);
  }
}

