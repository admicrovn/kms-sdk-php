<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/CreateKMSKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('/home/cuongpham/Desktop/Project/KMSClientPHP/tests');
$kms = new KMSClient($credentials);
$request = new CreateKMSKeyRequest(null, null, Algorithm::AES_256);
print($kms->create_key($request));