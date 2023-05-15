<?php

require_once('../src/vcc_kms_client/KMSCredentials.php');
require_once('../src/vcc_kms_client/KMSClient.php');
require_once('../src/vcc_kms_client/models/DeleteAliasKeyRequest.php');
require_once('../src/vcc_kms_client/models/Algorithm.php');

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DeleteAliasKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G');
print($kms->delete_alias_key($request));