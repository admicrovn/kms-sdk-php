<?php
require_once('../src/vcc_kms_client/KMSCredentials.php');
require_once('../src/vcc_kms_client/KMSClient.php');
require_once('../src/vcc_kms_client/models/EncryptWithDataKeyRequest.php');
require_once('../src/vcc_kms_client/models/ContentType.php');
require_once('../src/vcc_kms_client/models/Algorithm.php');

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new EncryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'cuong dep zai', Algorithm::AES_256, ContentType::SINGLE_STRING);
print($kms->encrypt_with_data_key($request));