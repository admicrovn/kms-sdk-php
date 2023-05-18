<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
//$request = new DecryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'MFGJoytdnyFPxv4Uz7qVnHdLmv1q+1CA0ZYqnMHgXvvJNbEBFAnBw23wyiTsXBOTH/iv5HNY5anUPwFAcVe2wFjOnQlGGr2RrUITsD4yiv/+Kjh6oOVIAG4ZVfIHI7fiHaYZdjsfUikzcU8ZHH6m6GuISKknRmIVUEEbn/lV2YI=', ContentType::SINGLE_STRING);
//$input = array("MFGJoytdnyFPxv4Uz7qVnDkWZEc/PJQLoDmmGIyOCRUyNUaizVxQiGBi32O6xw+LKzqIE+JY14Guxm1mS5rQqVCg6B0kA83UhSYOJ2ST4lbY0apCgbfyjnKSmpRrPum8KpP9xnGJX4El8N2+zWFQehl8vsLuuFk9B4pycKtKGpI=");
//$request = new DecryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
$input = array(json_encode(array('name'=>'MFGJoytdnyFPxv4Uz7qVnFWHYCtnlHi3IrgLxukU+ZgVoLkJzGKTU2bBoXRNpTeoOCj6D3o75TDnNAEV795AuqC50Xo8Vk3GQFG1vKGXij5gcvbjpaiqxfLw9Ki0lxSQfTQh3VNv6ZOgI8uxQ3OpMZLn/XVGn8HlncdeZYwazfY=', 'age'=>'MFGJoytdnyFPxv4Uz7qVnJsEL/DR2V5IM/oUz5P5J+UC9ihuDtCMnY9EJi1erGz1aDmj/A0IdKM8uLt0OId8Xxz/PmYvogPZTYDY6CvF65NnlZEesJ3dnr8mrTTL+4Ue6/Ukgy/xi3KDzRWay2KMWaS2xG0uwsfbzrtqQq0fwgg=')));
$request = new DecryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->decrypt_with_data_key($request));