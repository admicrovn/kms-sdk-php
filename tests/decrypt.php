<?php
require_once('../src/vcc_kms_client/KMSCredentials.php');
require_once('../src/vcc_kms_client/KMSClient.php');
require_once('../src/vcc_kms_client/models/DecryptRequest.php');
require_once('../src/vcc_kms_client/models/ContentType.php');

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'IwSaVIIs/ETMvPqIpBx0yQ==', ContentType::SINGLE_STRING);
print($kms->decrypt($request));