<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
//$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'IwSaVIIs/ETMvPqIpBx0yQ==', ContentType::SINGLE_STRING);
//$input = array("s1gbHPrgNfhZ8d4D3T/XNQ==", "eqOMg50E67tD1/MVYZtLtQ==");
//$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
$input = array(json_encode(array('name'=>'Iyd9uKOc59ZtVKfC/69y0A==', 'age'=>'iC/9uKKh1CTH7DW6BUfdyw==')));
$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->decrypt($request));