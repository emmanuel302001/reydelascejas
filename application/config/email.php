<?php defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.office365.com',
    'smtp_port' => 587,
    // 'smtp_user' => 'servicioalcliente@elreydelascejas.com',
    // 'smtp_pass' => 'Colombia2024*',
    'smtp_user' => 'enmanuel.tavera@colegiatura.edu.co',
    'smtp_pass' => '.Ee1007895957',
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
    'mailtype' => 'html', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '15', //in seconds
    'charset' => 'utf-8',
    'wordwrap' => TRUE
);
