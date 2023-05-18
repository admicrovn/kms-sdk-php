<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
//$request = new EncryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'cuong dep zai', Algorithm::RSA_2048, ContentType::SINGLE_STRING);
//$input = array("Volvo");
//$request = new EncryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, Algorithm::RSA_2048, ContentType::LIST_STRING);
$input = array(json_encode(array('name'=>'Cuong', 'age'=>37)));
$request = new EncryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, Algorithm::RSA_2048, ContentType::LIST_JSON_OBJECT);
print_r($kms->encrypt_with_data_key_pair($request));