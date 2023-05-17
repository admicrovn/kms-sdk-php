<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DeleteKMSKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DeleteKMSKeyRequest('01H0M06NHYRK32VS44JQKRASSZ');
print($kms->delete_kms_key($request));