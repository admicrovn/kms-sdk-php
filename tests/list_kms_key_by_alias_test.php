<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/ListKMSKeyByAliasRequest.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new ListKMSKeyByAliasRequest(1, 0, 'cuong dep zai');
print_r($kms->list_key_by_alias($request));