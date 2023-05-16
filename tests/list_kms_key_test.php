<?php

require_once('../src/vcc_kms_client/KMSCredentials.php');
require_once('../src/vcc_kms_client/KMSClient.php');
require_once('../src/vcc_kms_client/models/ListKMSKeyRequest.php');

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new ListKMSKeyRequest(1, 0);
print_r($kms->list_key($request));