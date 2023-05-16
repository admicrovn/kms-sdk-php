<?php

require_once('../src/vcc_kms_client/KMSCredentials.php');
require_once('../src/vcc_kms_client/KMSClient.php');
require_once('../src/vcc_kms_client/models/GenerateDataKeyRequest.php');
require_once('../src/vcc_kms_client/models/Algorithm.php');

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new GenerateDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', Algorithm::AES_256);
print($kms->generate_data_key($request));