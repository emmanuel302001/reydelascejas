<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginPage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
		$this->data = array(
			'message' => '',
			'error' => 0,
			'data' => array()
		);
	}

	public function index()
	{
		if ($this->session->userdata('login')) {
			redirect(site_url("principal"));
		} else {
			$this->load->view('index');
		}
	}

	public function ingresarUsuario()
	{
		//Recibo los datos por post
		$user_mail = $this->input->post("l_userName");
		$user_passwd = $this->input->post("l_passwd");

		if ($user_mail == "" || $user_passwd == "") {
			$this->data['error'] = 2;
			$this->data['message'] = 'Por favor ingrese usuario y/o contraseñas';
		} else {
			$validateMail = $this->Usuario_model->existeUser($user_mail);
			if ($validateMail) {
				$replyLogin = $this->Usuario_model->login($user_mail, md5($user_passwd));
				if ($replyLogin === false) {
					$this->data['error'] = 1;
					$this->data['message'] = 'Usuario y/o contraseña incorrectos';
				} else {
					$data = [
						"user_id" => $replyLogin['ID_USUARIO'],
						"name" => $replyLogin['NOMBRES'],
						"last_name" => $replyLogin['APELLIDOS'],
						"user_mail" => $replyLogin['EMAIL'],
						"user_type" => $replyLogin['TIPO_USUARIO'],
						"login" => TRUE
					];
					$this->session->set_userdata($data);
					$this->data['error'] = 0;
					$this->data['message'] = 'No hubo errores';
				}
			} else {
				$this->data['error'] = 1;
				$this->data['message'] = 'Usuario y/o contraseña incorrectos';
			}
		}

		echo json_encode($this->data);
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect(site_url("principal"));
	}

	public function sendEmail()
	{
		$this->load->config('email');
		$this->load->library('email');

		$this->email->from($this->config->item('smtp_user'));
		$this->email->to('emmanuel302001@gmail.com');
		$this->email->subject('Prueba Email Cole');
		$this->email->message('Esto es una prueba');

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
