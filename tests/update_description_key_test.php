<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/UpdateDescriptionKeyRequest.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new UpdateDescriptionKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G','xxxxxx');
print($kms->update_description_key($request));