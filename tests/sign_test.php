<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/SignRequest.php';
require_once '../src/vcc_kms_client/models/SignAlgorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new SignRequest('01GZX850ZW3W4HC40T1ZX6V8NA', 'cuong dep zai', SignAlgorithm::SHA512_RSA);
print($kms->sign($request));