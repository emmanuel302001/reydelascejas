<?php
defined('BASEPATH') or exit('No direct script access allowed');

//CURL Execute method
function executeCurl($data)
{
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL => $data['url'],
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => $data['methodType'],
		CURLOPT_POSTFIELDS => $data['datos'],
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
			// 'Authorization: Basic YWRtaW46MTIzNA=='
		),
	));
	$resp = json_decode(curl_exec($curl), true);
	curl_close($curl);

	return $resp;
}
