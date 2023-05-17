<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
//$request = new EncryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'cuong dep zai', ContentType::SINGLE_STRING);
//$input = array("Volvo", "BMW");
//$request = new EncryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
$input = array(json_encode(array('name' => 'Cuong', 'age' => 37)));
$request = new EncryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->encrypt($request));