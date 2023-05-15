<?php
require_once('../src/vcc_kms_client/KMSCredentials.php');
require_once('../src/vcc_kms_client/KMSClient.php');
require_once('../src/vcc_kms_client/models/EncryptWithDataKeyRequest.php');
require_once('../src/vcc_kms_client/models/ContentType.php');
require_once('../src/vcc_kms_client/models/Algorithm.php');

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new EncryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'MFGJoytdnyFPxv4Uz7qVnHdLmv1q+1CA0ZYqnMHgXvvJNbEBFAnBw23wyiTsXBOTH/iv5HNY5anUPwFAcVe2wFjOnQlGGr2RrUITsD4yiv/+Kjh6oOVIAG4ZVfIHI7fiHaYZdjsfUikzcU8ZHH6m6GuISKknRmIVUEEbn/lV2YI=', Algorithm::AES_256, ContentType::SINGLE_STRING);
print($kms->encrypt_with_data_key($request));