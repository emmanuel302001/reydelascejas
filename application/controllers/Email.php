<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->data = array(
      'message' => '',
      'error' => 0,
      'data' => array()
    );
  }

  public function sendEmail($toEmail, $subject, $message)
  {
    $this->load->config('email');
    $this->load->library('email');

    $this->email->from($this->config->item('smtp_user'));
    $this->email->to($toEmail);
    $this->email->subject($subject);
    $this->email->message($message);

    $this->email->set_newline("\r\n");

    if ($this->email->send()) {
      $this->data['error'] = 0;
      $this->data['message'] = "Email enviado correctamente";
    } else {
      $this->data['error'] = 1;
      $this->data['message'] = "Ocurrio un error en el envío";
      $this->data['data'] = show_error($this->email->print_debugger());
    }

    echo json_encode($this->data);
  }
}
