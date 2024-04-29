<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginPage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model');
		$this->data = array(
			'message' => '',
			'error' => 0,
			'data' => array()
		);
	}

	public function index()
	{
	}

	public function ingresarUsuario()
	{
		//Recibo los datos por post
		$user_mail = $this->input->post("username_login");
		$user_passwd = $this->input->post("passwd_login");

		if ($user_mail == "" || $user_passwd == "") {
			$this->data['error'] = 2;
			$this->data['message'] = 'Por favor ingrese usuario y/o contraseñas';
		} else {
			$validateMail = $this->usuario_model->existeUser($user_mail);
			if ($validateMail) {
				$replyLogin = $this->usuario_model->login($user_mail, md5($user_passwd));
				if ($replyLogin === false) {
					$this->data['error'] = 1;
					$this->data['message'] = 'Usuario y/o contraseña incorrectos';
				} else {
					$data = [
						"user_id" => $replyLogin['ID_USUARIO'],
						"identity" => $replyLogin['IDENTIFICACION'],
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

	public function userRegister()
	{
		$name = $this->input->post("name_register");
		$lastname = $this->input->post("lastname_register");
		$email = $this->input->post("email_register");
		$contrasenia = $this->input->post("passwd_register");
		$tipo_usuario = "Usuario";
		$identificacion = '';

		$result = $this->insertUser($identificacion, $name, $lastname, $email, $contrasenia, $tipo_usuario);

		echo json_encode($result);
	}

	private function insertUser($identificacion, $name, $lastname, $email, $contrasenia, $tipo_usuario)
	{
		$config = array(
			array(
				'field' => 'name_register',
				'label' => 'Nombre',
				'rules' => 'required|alpha',
				'errors' => array(
					'required' => 'Ingrese el %s.',
					'alpha' => 'Solo se permiten caracteres.',
				),
			),
			array(
				'field' => 'lastname_register',
				'label' => 'Apellido',
				'rules' => 'required|alpha',
				'errors' => array(
					'required' => 'Ingrese el %s.',
					'alpha' => 'Solo se permiten caracteres.',
				),
			),
			array(
				'field' => 'email_register',
				'label' => 'Correo Electrónico',
				'rules' => 'required|valid_email',
				'errors' => array(
					'required' => 'Ingrese el %s.',
					'valid_email' => 'Ingrese un correo electrónico valido.',
				),
			),
			array(
				'field' => 'passwd_register',
				'label' => 'Contraseña',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Ingrese la %s.',
				),
			),
		);

		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {
			$this->data['error'] = 1;
			$this->data['message'] = validation_errors();
		} else {
			$result = $this->usuario_model->insertUser($identificacion, $name, $lastname, $email, $contrasenia, $tipo_usuario);
			$this->data['error'] = 0;
			$this->data['message'] = $result;
		}
		return $this->data;
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
