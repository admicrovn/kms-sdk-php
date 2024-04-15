# Key Management Service (KMS)

# Install library

### Install
```shell
$ composer require admicro/kms-client
```

## Table of contents
1. [Usage](#usage)
   - [Create KMS Key](#create-kms-key)
   - [Generate Data Key Pair](#generate-data-key-pair)
   - [Generate Data Key](#generate-data-key)
   - [Encrypt](#encrypt)
   - [Decrypt](#decrypt)
   - [Encrypt With Data Key](#encrypt-with-data-key)
   - [Decrypt With Data Key](#decrypt-with-data-key)
   - [Encrypt With Data Key Pair](#encrypt-with-data-key-pair)
   - [Decrypt With Data Key Pair](#decrypt-with-data-key-pair)
   - [Update Alias](#update-alias)
   - [Delete Alias](#delete-alias)
   - [Describe KMS Key](#describe-kms-key)
   - [Disable KMS Key](#disable-kms-key)
   - [Enable KMS Key](#enable-kms-key)
   - [Delete KMS Key](#delete-kms-key)
   - [List KMS Key By Alias](#list-kms-key-by-alias)
   - [List KMS Key](#list-kms-key)
   - [Update Description Key](#update-description-key)
   - [Sign](#sign)
   - [Verify](#verify)

## Usage
Add security_file.json into project

### Create KMS Key
This function generate KMS key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/CreateKMSKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new CreateKMSKeyRequest(null, null, Algorithm::AES_256);
print($kms->create_key($request));
```
Response
```text
key_id = 01H0M06NHYRK32VS44JQKRASSZ, alias = , algorithm = AES_256, state = ENABLED, description =
```

### Generate Data Key Pair
This function generate data key pair, create plaintext private data key, encrypt private data key and plaintext public data key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/GenerateDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new GenerateDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', Algorithm::RSA_2048);
print($kms->generate_data_key_pair($request));
```
Response
```text
key_id = 01H0ENF8BREJDN9SB7G7AP5M9N, algorithm = RSA_2048, encrypt_private_data_key = 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, plaintext_private_data_key = MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCBY4UJbwXNAqs5GGRd/fTzl817yv6AqxWbxdp+okOLnynbulmnYk/VOayG7Wey6kLeaOgYs+Qsngjc9faqBv+zhmltzmIORdU2lKtZ+QyGXcOtR+904ELg5Qv9jXMykfs9eUgr3SEM/nI3V1c9r6VkzahaDzTkK1JYD3iqzA5ACrwsBwuL8t4/6ehaQzAdW8KNxDwS48HqyjaPiW26UJBUbj5k1absfZAV+VQgtrSU58eZNRJp6YyTJbPhYZ3DWWnUTx/UgoAWbjtKlFrwu9nFLMIg/zAR5uPTWOr4DAdFC1AtbTYtDetueGfbcdIslCxtT325Yhc5PmMVebxjuet5AgMBAAECggEAT6MCUiEcT+dxnY2u0M8rQfbQCX6SkH08qojnh4O10SzgpZYX8lcnTdTWpKFgbxWSnLOzDulB6lhGmkFlVZdDMKrtHyGk5qYCqjptEM6h792sP24EK0qQvz0a2S+DlL+XBGouipjq68V8ZSWD07rVMKsIEI5Ffp5Pa1XybiV0K+PPJOnncajKd2dbeuG7KjZ2p0fDK85rqYOFPEI1kOxUgBwHpEG83dpyNMvHYfv9pFmhr0DZhX9Z+YyootkK9gahD0RjFYwriySALVgxWYnA5dawJyDsH7aq6ifdfmp0boZ5dYxrt6NL3T9OGwWHRjEEs5RLPC4KxauHrG0tRzYB5QKBgQDBWwF8DFTJ3XuBzlVAqOkyr0m29akN4HIa9NpPMXZw2Lk8RxtBStSCHJHvU/jfbfFuLV9ccYMD/AjYYjUE544rrN6WIIzVgNjkNydzfiKJFQn0G/kmb3mnty7/SX3xZLqRPWjZHmEZzd9F4wnGUa8AyUmeAHhGzaRoRYRrF+jSMwKBgQCrTxUh9c0Uy7in3RMoUFTuTptApOoUkLFV1cYWpr6vKnfV7GTlUEbd9hDR0M0KkZuP3My2frAEXGc+cTugfJX7bwNP15GC3AESCg/aa4C4OLjmd7YVGt9aqDBLdj+5zqdTR/5QRmkEA+041BZqVM9orYezIOskECVkTF0pT4CXowKBgFaKuhZgmo6jkEUgKe4/6+hgpni6aYkpfUjtcMzjUaTei8Ib/Wny6Ty3NuZMymaOmfH7YuRIdiCRbRAUnLBuR6bqv9GoDgD9o5Y5zXGW8jQy83qMDq8SU/wqNGHU7gbeU9bwCn6rZ0CacaWhId3e75pFfaq3gR4Hqt90xfj9AZsbAoGABMSOsgNFUe7ZlNJyVgzmUDuf1ozAdxIP3XO1r6u0YuurqiiKJle1oTfX//7vtfuXeMmMaQfdnkF0HijIoA7XncfZL7+wLRQyc24UQt/7FSV+/+sVBkFZNgy4S2FfJKy7u3WlflZ3VcVGNO6yMQNrQl6SCEpCQR6x67i0XxH3YkECgYBSfQe6Ljw6gF2dWMXv6ePRbT9/DJ6713EQd5d0FQK1vD9nVw4tEdBGP1Vt0ki5hPD8J6eR9XwecgeE0ITME72ThOhMyS90kJIG/og2wq2r8961j2C3H8/YFwmcOoLXQPW7bDub+szWlxXmb+YI18Zxq4/FTXGP8FWo5FfFJfMjig==, plaintext_public_data_key = MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgWOFCW8FzQKrORhkXf3085fNe8r+gKsVm8XafqJDi58p27pZp2JP1Tmshu1nsupC3mjoGLPkLJ4I3PX2qgb/s4Zpbc5iDkXVNpSrWfkMhl3DrUfvdOBC4OUL/Y1zMpH7PXlIK90hDP5yN1dXPa+lZM2oWg805CtSWA94qswOQAq8LAcLi/LeP+noWkMwHVvCjcQ8EuPB6so2j4ltulCQVG4+ZNWm7H2QFflUILa0lOfHmTUSaemMkyWz4WGdw1lp1E8f1IKAFm47SpRa8LvZxSzCIP8wEebj01jq+AwHRQtQLW02LQ3rbnhn23HSLJQsbU99uWIXOT5jFXm8Y7nreQIDAQAB
```

### Generate Data Key
This function generate data key, create plaintext secret data key and encrypt secret data key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/GenerateDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new GenerateDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', Algorithm::AES_256);
print($kms->generate_data_key($request));
```
Response
```text
key_id = 01H0ENF8BREJDN9SB7G7AP5M9N, algorithm = AES_256, plaintext_data_key = MIGqyHGnNwcyfGi8+uvHvIheFfwAaZdvDSb/mFMFAp8=, encrypt_data_key = 9gwVrJopJ4QUbAiD58ipoqnUR8DKdP7gJjOhzx9NEXW4/eRjtHkaBtCVKEw+Gkwc
```

### Encrypt
This function encrypt data directly with KMS key
#### Encrypt single text
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new EncryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'cuong dep zai', ContentType::SINGLE_STRING);
print_r($kms->encrypt($request));
```
Response
```text
EncryptResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => IwSaVIIs/ETMvPqIpBx0yQ==
    [algorithm] => AES_256
)
```
#### Encrypt list text
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array("Volvo", "BMW");
$request = new EncryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
print_r($kms->encrypt($request));

```
Response
```text
EncryptResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => s1gbHPrgNfhZ8d4D3T/XNQ==
            [1] => eqOMg50E67tD1/MVYZtLtQ==
        )

    [algorithm] => AES_256
)
```
#### Encrypt list json

```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array(json_encode(array('name' => 'Cuong', 'age' => 37)));
$request = new EncryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->encrypt($request));
```
Response
```text
EncryptResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => {"name":"Iyd9uKOc59ZtVKfC/69y0A==","age":"iC/9uKKh1CTH7DW6BUfdyw=="}
        )

    [algorithm] => AES_256
)
```

### Decrypt
This function decrypt data directly with KMS key
#### Decrypt single text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'IwSaVIIs/ETMvPqIpBx0yQ==', ContentType::SINGLE_STRING);
print_r($kms->decrypt($request));
```
Response
```text
DecryptResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => cuong dep zai
)
```
#### Decrypt list text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array("s1gbHPrgNfhZ8d4D3T/XNQ==", "eqOMg50E67tD1/MVYZtLtQ==");
$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
print_r($kms->decrypt($request));
```
Response
```text
DecryptResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => Volvo
            [1] => BMW
        )

)
```
#### Decrypt list json
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array(json_encode(array('name'=>'Iyd9uKOc59ZtVKfC/69y0A==', 'age'=>'iC/9uKKh1CTH7DW6BUfdyw==')));
$request = new DecryptRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->decrypt($request));
```
Response
```text
DecryptResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => {"name":"Cuong","age":"37"}
        )

)
```

### Encrypt With Data Key
This function encrypt data with data key
#### Encrypt single text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new EncryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'cuong dep zai', Algorithm::AES_256, ContentType::SINGLE_STRING);
print_r($kms->encrypt_with_data_key($request));
```
Response
```text
EncryptWithDataKeyResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => MFGJoytdnyFPxv4Uz7qVnA7lfQc3+mQzF+AQgv548iIQD2WdUWp/rOksGeZ2mS6miF9d02PXQlo6b+slzEkiM0IisE2Gi9u7Qte2TQSnn96ACnf2qQC2WGxuS8b15EoZrNDxW1yhPuqGxaTsn5v71sMGmGWmd/0IqeIZP2kQCIs=
    [algorithm] => AES_256
)
```
#### Encrypt list text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array("Volvo");
$request = new EncryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, Algorithm::AES_256, ContentType::LIST_STRING);
print_r($kms->encrypt_with_data_key($request));
```
Response
```text
EncryptWithDataKeyResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => MFGJoytdnyFPxv4Uz7qVnFVx0mtEbQwbT2RXK522paJ1mfcsnnUoSuUtmF/2Vv4v00ZABnU/yB08sLw67BvrDAv3kbpj0EZSLcUxH9DYTDwH48lapzHUvJ6eCoubbHSa/clN2ooT8vc2jJrO1Ys01Y0XRDsTDHjEkzJ+MuFwyT8=
        )

    [algorithm] => AES_256
)
```
#### Encrypt list json
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array(json_encode(array('name'=>'Cuong', 'age'=>37)));
$request = new EncryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, Algorithm::AES_256, ContentType::LIST_JSON_OBJECT);
print_r($kms->encrypt_with_data_key($request));
```
Response
```text
EncryptWithDataKeyResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => {"name":"MFGJoytdnyFPxv4Uz7qVnDy6++aPI4QrFlHanVF3rstjXJP8SgGPU5tkVfDSzount1FopxvwyK7O4SKkBah78W/PiwuC5Kh5MhY5mht+hM/HFBItmQBZjA+EDOSe17wldd8lCdrfCZtyM0LWbVDQpSCLgbfaqr5yscH6RjnH+P4=","age":"MFGJoytdnyFPxv4Uz7qVnCzpvqs9FbpgYUEJMQeJjVj22WLChjjZvVgipK+d9EASugKDnOipLSDr5CDeE+B+FTgVdqWbsbxcGc2aadt4wBn/lDgiuZrhgFZExcgiwzyB0g0hxido7pSlyZi3GELUv3Sp8ex6DkjBRL/6Lf+axyY="}
        )

    [algorithm] => AES_256
)
```

### Decrypt With Data Key
This function decrypt data with data key
#### Decrypt single text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DecryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'MFGJoytdnyFPxv4Uz7qVnHdLmv1q+1CA0ZYqnMHgXvvJNbEBFAnBw23wyiTsXBOTH/iv5HNY5anUPwFAcVe2wFjOnQlGGr2RrUITsD4yiv/+Kjh6oOVIAG4ZVfIHI7fiHaYZdjsfUikzcU8ZHH6m6GuISKknRmIVUEEbn/lV2YI=', ContentType::SINGLE_STRING);
print_r($kms->decrypt_with_data_key($request));
```
Response
```text
DecryptWithDataKeyResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => cuong dep zai
)
```
#### Decrypt list text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array("MFGJoytdnyFPxv4Uz7qVnDkWZEc/PJQLoDmmGIyOCRUyNUaizVxQiGBi32O6xw+LKzqIE+JY14Guxm1mS5rQqVCg6B0kA83UhSYOJ2ST4lbY0apCgbfyjnKSmpRrPum8KpP9xnGJX4El8N2+zWFQehl8vsLuuFk9B4pycKtKGpI=");
$request = new DecryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
print_r($kms->decrypt_with_data_key($request));
```
Response
```text
DecryptWithDataKeyResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => Volvo
        )

)
```
#### Decrypt list json
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array(json_encode(array('name'=>'MFGJoytdnyFPxv4Uz7qVnFWHYCtnlHi3IrgLxukU+ZgVoLkJzGKTU2bBoXRNpTeoOCj6D3o75TDnNAEV795AuqC50Xo8Vk3GQFG1vKGXij5gcvbjpaiqxfLw9Ki0lxSQfTQh3VNv6ZOgI8uxQ3OpMZLn/XVGn8HlncdeZYwazfY=', 'age'=>'MFGJoytdnyFPxv4Uz7qVnJsEL/DR2V5IM/oUz5P5J+UC9ihuDtCMnY9EJi1erGz1aDmj/A0IdKM8uLt0OId8Xxz/PmYvogPZTYDY6CvF65NnlZEesJ3dnr8mrTTL+4Ue6/Ukgy/xi3KDzRWay2KMWaS2xG0uwsfbzrtqQq0fwgg=')));
$request = new DecryptWithDataKeyRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->decrypt_with_data_key($request));
```
Response
```text
DecryptWithDataKeyResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => {"name":"Cuong","age":"37"}
        )

)
```

### Encrypt With Data Key Pair
This function encrypt data with data key pair
#### Encrypt single text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new EncryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'cuong dep zai', Algorithm::RSA_2048, ContentType::SINGLE_STRING);
print_r($kms->encrypt_with_data_key_pair($request));
```
Response
```text
EncryptWithDataKeyPairResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => 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
    [algorithm] => RSA_2048
)
```
#### Encrypt list text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$input = array("Volvo");
$request = new EncryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, Algorithm::RSA_2048, ContentType::LIST_STRING);
print_r($kms->encrypt_with_data_key_pair($request));
```
Response
```text
EncryptWithDataKeyPairResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => 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
        )

    [algorithm] => RSA_2048
)
```
#### Encrypt list json
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EncryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array(json_encode(array('name'=>'Cuong', 'age'=>37)));
$request = new EncryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, Algorithm::RSA_2048, ContentType::LIST_JSON_OBJECT);
print_r($kms->encrypt_with_data_key_pair($request));
```
Response
```text
EncryptWithDataKeyPairResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => {"name":"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","age":"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"}
        )

    [algorithm] => RSA_2048
)
```

### Decrypt With Data Key Pair
This function decrypt data with data key pair
#### Decrypt single text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DecryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', 'MFGJoytdnyFPxv4Uz7qVnER9M9k0clr7ZLr+oULL7mW+07Ge6e+i2Vb7UMhOdHrVaLaVXMbW/ju7IzCSjuortUXU2P32bKeOangOcB6myDWFL23MRiar/B+ph87T6QH/5nD/8pTQZoKyHl9pdH4wXa3MDZl2AAE17pb5qKiQaemPJ1hHznqHwXDE49FuY0icAqnPQYU/+/CxoBEATyk800Eth3/3mKozCYohTiKqm/Tp1SGCZG9//PAYKkW9Vx230eTH7Pe1LZJowL7/X9qA+fRIsQwX5fybsIR0vHBxhp8REONWE31TnCYN82k145bABkXqZ3KWc6fXzkKjrNf5bLicQ7kdiC9dGbNHttQPPoYhzsip/0qfb6ofT/9lo28jjLORyWcCapoyOItDb5lct38smgcmp2litPAL5D3S9Hbppz3RkA8HG/axi9ojuknilV+fTgJjBgqmSScBsPoR3vLFy7hF8zxEsKQMZxlzWAd8jiIjXDarit72C22HGNbsLpaIteUYg/3IEhLrP6NQNspdk9EejFtbi6GJNUUY583OQKon8gl4c7CT2xTLdNYmsWUWQ0q7wg2GXEae+ck0f1w4kkv6eX3Xufbz9Yn7HDi8rz181zg1C4ILjnk0N/8WN+ZLlv4LroCzQoiTNGSQEXDAUqOYXaCMTWQxjtvVmbnxfCPd2qqbYYFBw9IDRj8yi37MnDORNSa836SXT+1ALUGZOIp6D3FDrSZgj6r6mbad8yjpu9qoFoqVZQOyLWiHsULc7tNgpmklGJVqKYI+2Csc1ilzcr//2m3vT/mGtjZ1xHH9lI5BqJPjsnCcPzdafIkpZMcsaTW+B0PSDGsQS6x+DxgHgV4DMu7tl5rXK6Z90zVftNSL2yJsEA0ZbaKZb5pFhs2wNS52ORQIEocsu/ppfd8jszDJlTUaWF0umEM1bSBpI7Fzv/Qrrd5EGqjErDrR2kaGx71dKhh486BE9LUkhwJYeO+FCWVhGNvEjixuKFzT2d2SYlsDdOSqYR7bqtPZgd6i+85ftixIK/LLD22aEMF3qr7NnTZVASwwo3q9zA0OYf6UMndLMdj+st6T99pS23k4n4893nHb+3GpKZIIEVTd80mgz9JMeem2W1G1YnNFLywi/xTRr3ne1lQCduIgrkGa6TFfSfwRx1DfSd6WBVJ3Xe+TPzlqfWkNAWTbOpydy2hcEhI21ybgt8I+IFb0PDlbNXav91haohi+uW3hlizCmo0HTgscPCjaTSkNe1oDKcVljb5JFvp72LI428ffo012YdMYK1CitxFtNbWikPeDViGbg125mmXuC0Fr7t0vhKL9xo6FiptV1o178vH70uCNQ8dcHWUe6blGIBdZ0GTtBw5M0eFTdz3DF9L/LaCblKq4sBNreX1M1juE6gdD/OU0s66IUk/W15m2xC7+1+8vW0KZHDmmUh2aLHFlG2l/2K1WkCcfrBZCGIdGmaq7nmfYERP7vX72OknV8cJVuUD/vG1atCVfh9osTJzkeBcBhn9Ulc5EMBtB9HCXDlCsIp4n5ucsTlj5ymHMZRraNPx4ipkhuVIKmlNL3fiS1hOccwcnqOGZk4YP5CY4HJupMpv3LtDLU0Ig7XMX4uwNG5ooIjSiEzOfzPdiOJvO5uNXnYqtVnt3ezmJoMdfkejtfchHO2JI9Zc+aF/zaWD5eZtrAhk4/7Y70X6W1Yywd2aE8v0wIZWKUGl47mzYmgOJ6VpLqyEF2wfNXhalBtMdVr9G2i10UIX7bSrZGbz3A46m/1BHB0OuUV+0uWWHHu70pVVGLOFSF4ULDzOkNa3flekbMPSGOoEUzZyZYzWXT8nYxeBzABTWd8IYfzR/I0HfYpVU1Gzl3pEpOd+3DLm238cd5yUwUUWSDEe1CStVmQzmFDGu4thqPqElvuzgV4FCb77yq1tgPeb5QPf4nWdCxAs1LJ6sFEt67Xxk1TCw6Cy9VDem0EU3fWxZJg3nj3sh+QfGlp+aJ3FVk8qNl5xsj/yZQmvBYgxfJLfeH4qKG1umX1KRxR6psfcx1nDs+mDW7c2VPSVqgR5UXmDLCyexSUCvm9JPoixo4EtCqMr+E9x3Fo6wWRjZnI+8O49NoEDl2MQ5CIxjwL/6sjtohckTJeuN+H5Uob10Igv99iC/JRE4K7w9/F7hZ8HncO8woig3cRjIMUlr64xmmio/GwwsO/IL5JLms3dYroFxM862KeDa3qUp1R7uTtCVwQ4E485owMwBYIHOG/N5x5qRTVYITc9ShZDuW3fgJMxP9FtvbTMlcmNZkhvkjljRezQmUj8lq/ivSaC49uZhHZ6dul6xVdvNpET9o7dNGjUpeuN2Fp+rWAF7KbbE0U608rMHqSU3Ce8ska/2XeqeBLdrNzN58GtvEOaemLSfylclkiEsTyNdOKu51TVYXoLPuEHFA/Gfx6BGF2MO9A/Jq69lNsDFbPwZH+ZTygJ9m9Urz/mOTUXWj9v64aE/MFIHwby+4qr5mYrn+3OL2c9Qttc1cxEw/bekbm2btOCAWSN+cno0gdOIGgEnHZtmQviQ+0QSCWh18UVK/x67VM/g/ruN30SUxrLA8pgmq2cBhBM7gUYwYuqyozAG1dU7zkh6gLsFkNLvkDa9TxOC5jVtdl9Ka+uiQVQgIZ/lmhgz7TAhpSZQ3shewL+exuxAyg3umiumlO43kLBv3i2NWHEoE/NT/kF6fFRE7pue/YE9s3C0z6AWahqRN1rBWF0Dbv0URfOXgWSQ53tjiO10xLDdymb9uAu1TwcnSAzDff4g6fklRJAhl3J6VBHMutfxsl/c9ah8GrNXSAg5g6FUz+APZrn0MilkI5oSFVOfu2nFqFHZY25V/JRK56eAd9V2zGQjLUWaN6NTMmmyDg4l06NFat9YJsoCJKtJwajPRkSgXpmOgRQ3ylk6SQAqZBXqOuA1RwWJ5UKPEujVv+mO8UOhZiijegtxPNZtmNgWkO6zhZG2km4EnXHltSpZfXT2aacH8e4Rn1zwX0Msg77L9Kz6/0k6K0+/uFqwdElXcGxnw+KGYsXZWuTPX2FlGw9Y8U/o3taAqUH9PHPE6y2iAvganGay7QGPa4g8DzEPYoD8ybQ2KqxY3Tw1MmB77T5CPt5Xdtl4V4Nnbi3wcoTtzAEzIzMPMnqux/4Wvtp2Fimrs0ocRJ3H5qEAYt3UfFyHYTnCaRVJKWYYms0/OsM1gk9R8m/GQ2Vvcu1/XsmnCLBq1HZpdUV9mK5tSoZz+StORFPSmGTSXOmTFoPu8dmRs5U0v6AUVi1vewk/w4GXp0Tm44tg4an0snYzdrcEnEGBiswEl4rZaq6YUkJfMta+u2r469lgHgBaNYdZpd+Yz302bbON4z2glalUqZASZ4qL3D7zsY36dkrnuaQCluJMq/caSXaI6g==', ContentType::SINGLE_STRING);
print_r($kms->decrypt_with_data_key_pair($request));
```
Response
```text
DecryptWithDataKeyPairResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => cuong dep zai
)
```
#### Decrypt list text
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array("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");
$request = new DecryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_STRING);
print_r($kms->decrypt_with_data_key_pair($request));
```
Response
```text
DecryptWithDataKeyPairResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => Volvo
        )

)
```
#### Decrypt list json
```php
<?php
require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DecryptWithDataKeyPairRequest.php';
require_once '../src/vcc_kms_client/models/ContentType.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$input = array(json_encode(array('name'=>'MFGJoytdnyFPxv4Uz7qVnEHabCotTyIzwRiAgBv9CaCOusrIQNYgbQn/JuNyYaZ1diYbvYPgWZ77CXLuagriS3wzVWKvHQ7VaIoY2NCDf6pxENu2t62wMBdyEd5HdRqnCKIQUR/MacKZgUxMhU5uXqumBVfc1z2NRxczK3Sa9zqNNvBKdbHCG1k7KZfywR+3Z+tqKsZpMiu1J3Ff+ucMowI3o0nIgxEsFe9YnWOBAU1igvw7cJP7yN+0bKYz5F1RO4qbuC0Gzl5mrBS7qCFrsEuRdVT/+y76OY6VqUOobVvloZHwurADMOT3xfKd4mokqP6O3PlDxnTaamxKaH4pJlq3g8jFQjNDFJUL+MvLwSNF2TWQeEOkcJSKNoya88A6btPm9buBFnOd7NH6v+bf7X7xHQO3pV4G8tKKXBmppNczijnXx8ppPQGz5F8boIfl3LUVeS9rypujsrG7jw9/ECTVanHgLpSe/gPbRseleqdCAkclQF5EtrpVvzEGqlLxoxU6jZ3UbvxkkzuqqUMRJUf+F40/RtSiTJ3Pw/RRwQG7GocYSXGwxXixfMqmvk6ZLvN13qB5J9j87y9Osc/HrKuBQWe3/ZKHAFoM8xECyLC8HsauVByMPx78eShlJBFEla7L10IDHGYeGEU3hRggx43V20aDW2hU+wJOCArThY7L7B5//gfOdwRVsjxEZVtyz15elbGa25dTDiiW3OXII53ECQp2ppXr+Uxh4q/7RVy4a2cQHSO0W2tHT2u9al9qTnVz0CMU3TozJvqGbFFzjCGnAQoyIOezZDyM0v0Pz5hqupGV0yrcA+KSlya5VTBWmO+YDnwIpQY6cxmVDcXxdkcAjghE461ov2h4cvM/xGDz51kYpRdlFAX1vRiBx3YTfG+wMFWPgjjFobSuq2HH2qHqsIoD1ZGN8MW91SoO18t+VAenYWMzV379Rt1IOjLIEEoFMG5ofQeD5TwhKTfRYQMNp2oV/3onDLnT649B0D0/R0ducjtn3wKED66Sv2Po5Lfl+uX8FsetQOTU2sk0JkCYCmGq2dyVR9BTEKZ9wfMmGLBJYPLkssAnPolqlgem2f2is9YrFzxiUAPeaIFFM3FRLPmiIKmdMkT8EFLwPwH0oQVbobJ/gLIUq33p4QBMC/0asA73eJVk5WU++nMhgvpqiQu7ZR2kwQZUafATaTlnraNkM5MdFOiqevL+gW/iiuPxRdEOtik7qu/e5tdiArBy/FHEb5mHkS10J3e9lUgCHJbvEeziIqYNu8b2A4DBQ/CtX88UurLgKceRaP4m2zDcCykZETGptcumrXAfnom5ngmhmn+vi+DIxjh6NMVnZHWNc/2op98iJnuHnkQeCrQEtDOjRpmfUTRE+nuyKeVdXIvpbCz31Yq3gQYRZUthsbvuw+xR3SiO17ePRsDxskz1n0aymxPWmwx1sU4di7tfwKzAsAnvqembOE/GeC4N65c0sQAGq8b8p+kITdssPXmotuBTXHw0NtzXLp3yobCvvZKW6cJpZLkehGWc06Sxi3L3umzVS/xykfmamI6VUE8l9lvzP0MTr2j/QmPlmk56PWzudnY8Zt/px2p7KNNLYevW0YtVjNTckoR6FhWbD1z9KL1pf//bM9IhXs9h/QQcqbBrsDoaFe/Vz74gE9XdhMqxntVZ8JncKUGdX8iboAZ/3RaRPOoeYkRU//vNC3AGK6U0jkX7u4HsBVocVOHaHur4QHDRHYCEc+lTsHNXRbSB2k5NW3g/bzXmGTmZzuN17bya+e0onJYX+UDOMCXx8GynK1gyvRiG7sb3j3BoghVT2utiOijnoo/sNWgz8r5jFvwQgQKfwxLKSz3ijW42sudt+9Z4Mh2HHELaoZicuoRTmbRdlgohQlZrHALB3/zW+4hpk+ILX97zzT4KefkTf/ttvesKTnsEsrKvVvMOFL7kznRiZhTs700b00W8JXPD3DKp/s6PKWH5Ht9NmonCyzo/QClMlGfHQLd+VrhOKJX7D7h7pzDUHhSEjUsvgGY9+gc9sbrtIvrkNDExYfw47Mf1S3RuR0clOPqkDNGC2WmU5Ve6GKhCHIlNmynKwy8oTWVVMXaN1US2v18NsHxk3OkHP5F6jYUDlnEq/60HGl82jUAGfcse02ZxOPw8F61cM/vG/rGKM9tElhJKwX/+oQPq9bKXDJAkHg3u0xZ5tEGExtQ/EKG5tmT1L+bVWYzsa6HELxMzUWbGhSJc7V95UaCEVee6DUWXVK/M8xlNuGITG3FaZUiBsSqiYjOJ/WnhJqYmL8PZovnlpdtDGKYe0hctcKlkxnP9JaoCwarb1GmFh/y9wYSZzjpggKQ4YfK/VjPKvUBaf3VOf6Qblugm87i+UpozNT0DIazHj4PAcKWWmQBmCSXgL2oGCRFqTsoMloO8l7zPLwtFwTTC5Y+p7OxsFORh9MwJk1gXaBC9hYxYUD3cdoz5t4rVBsmwTuYnU+oBw6+JVGqV7zKi0zUHK0MaBSU0PyqqDXIkGPMY3TeVgA0xR0XElzkGyYQpASvHTe4bkmWBeV7Xk+zYqkHcMEUecwSA3YSovvN4bw0OyO5a6ESnOR03SmKDN7yPjOPTe6sZr3N+9asfSoOsgDZ7jdmwWn+roV9g7zSxzWyjO/3cNtVpj9QbcCD1iqbHqvc6Fzj+ox65m0o0188qMgcrt6VPp0c9KRw6M6HwxaH7Yl2STUiA2eBK8s/aSZ6TxGviFPINOxmed7OLNkK1oNOM0mnZBNE1u+AptbPkCCxG6beN86i8cLMCYkZe6KtsueYKndYKi5FrgOST3IX+4Iv2ZnGXMd4bGMKTm4ekhq1B4oLV8RGtTsxmHe1/eRtvcKYGu2c2r+5R2gozeAKR9n3mFBPXkxSgExQbK88qbEyeZbrdt3riVIo/ejSMRlmxYgPtRCIt8T+xKggFOx4/JllKarqBTauq60viVGtQSJ1uw1+ZtR+moP9I1BoVgAMoZgrme1w6xMb+u31aDjrdZam2rUTiAl57+MrIknKIlgDOWgSc+A0TEFVwtrkImelGJEsfYZPKeMlAqsZtvn9W1u84rBMfBJeKQ8xk3AG6QEmd4UVs2V+9JTvUUozk1EtQbYYSDlnpRWaorFIVE/gWwMm8gUGIKXbGF78/pMGX+oWjLa7oY+Jh7rb9dGMoylx7e+ShX81JT1o9P8Zame1lprICtqMBbs1JUEvszddBybKob0WVaHF6hjctl0tjucZhp/txwUVkvDdMZgYz8cqozN3r48FI+2EVnoL4RLvD4S4FT0T2KWePEmIh3qjVoJl1rmE8GYV6vAjImwIhxsax+xSCd/8bdVGTZf5t433V8D2cWN3sy+LNYktImy2z4vYVE07VGKBO0PAZETATsgUFk8QsTa/V8/X/QQywKBEfLvD8kw==', 'age'=>'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')));
$request = new DecryptWithDataKeyPairRequest('01H0ENF8BREJDN9SB7G7AP5M9N', $input, ContentType::LIST_JSON_OBJECT);
print_r($kms->decrypt_with_data_key_pair($request));
```
Response
```text
DecryptWithDataKeyPairResult Object
(
    [key_id] => 01H0ENF8BREJDN9SB7G7AP5M9N
    [output] => Array
        (
            [0] => {"name":"Cuong","age":"37"}
        )

)
```

### Update Alias
This function update alias key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/UpdateAliasKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new UpdateAliasKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G','cxacascas');
print($kms->update_alias_key($request));
```
Response
```text
key_id = 01H0FB74RH8Z3C9CP696ACPC1G, alias = cxacascas
```

### Delete Alias
This function delete alias key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DeleteAliasKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DeleteAliasKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G');
print($kms->delete_alias_key($request));
```
Response
```text
key_id = 01H0FB74RH8Z3C9CP696ACPC1G
```

### Describe KMS Key
This function view KMS Key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DescribeKMSKeyRequest.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DescribeKMSKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G');
print($kms->describe_kms_key($request));
```
Response
```text
key_id = 01H0FB74RH8Z3C9CP696ACPC1G, alias = , algorithm = AES_256, state = ENABLED, description = xxxxxx
```

### Disable KMS Key
This function disable KMS key, when in this state Disable, KMS Key will not be able to use the encrypted, decrypted and generated
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DisableKMSKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DisableKMSKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G');
print($kms->disable_kms_key($request));
```
Response
```text
key_id = 01H0FB74RH8Z3C9CP696ACPC1G, state = DISABLED
```

### Enable KMS Key
This function enable KMS key, when in this state Enable, KMS Key will be able to use the encrypted, decrypted and generated
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/EnableKMSKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new EnableKMSKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G');
print($kms->enable_kms_key($request));
```
Response
```text
key_id = 01H0FB74RH8Z3C9CP696ACPC1G, state = ENABLED
```

### Delete KMS Key
This function delete KMS, key will not be deleted immediately but will be deleted after 7 days
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/DeleteKMSKeyRequest.php';
require_once '../src/vcc_kms_client/models/Algorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new DeleteKMSKeyRequest('01H0M06NHYRK32VS44JQKRASSZ');
print($kms->delete_kms_key($request));
```
Response
```text
key_id = 01H0M06NHYRK32VS44JQKRASSZ, state = SCHEDULED_DELETION
```

### List KMS Key By Alias
This function list KMS Key by alias when the user has permission view those keys
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/ListKMSKeyByAliasRequest.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new ListKMSKeyByAliasRequest(1, 0, 'cuong dep zai');
print_r($kms->list_key_by_alias($request));
```
Response
```text
ListKMSKeyByAliasResult Object
(
    [keys] => Array
        (
            [0] => KMSKey Object
                (
                    [key_id] => 01GZJT8VX8ZD3TVNN0VZXD3J69
                    [alias] => cuong dep zai
                    [algorithm] => AES_256
                    [state] => ENABLED
                    [description] => dsafasfasfasasfasf
                )

        )

    [alias] => cuong dep zai
)
```

### List KMS Key
This function list key when the user has permission view those keys
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/ListKMSKeyRequest.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new ListKMSKeyRequest(3, 0);
print_r($kms->list_key($request));
```
Response
```text
ListKMSKeyResult Object
(
    [keys] => Array
        (
            [0] => KMSKey Object
                (
                    [key_id] => 01GVD5HP5NSS0AZAX9D4E6Y1RX
                    [alias] => cuongdepzai3
                    [algorithm] => AES_256
                    [state] => ENABLED
                    [description] => 
                )

            [1] => KMSKey Object
                (
                    [key_id] => 01GVD5JGAX1ESW09PN3BFQ7XBE
                    [alias] => cuongdepzai4
                    [algorithm] => RSA_2048
                    [state] => ENABLED
                    [description] => 
                )

            [2] => KMSKey Object
                (
                    [key_id] => 01GVD5MX66PRTEJGD08ZTPXS4S
                    [alias] => cuongdepzai5
                    [algorithm] => RSA_3072
                    [state] => ENABLED
                    [description] => 
                )

        )

)
```

### Update Description Key
This function update description key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/UpdateDescriptionKeyRequest.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new UpdateDescriptionKeyRequest('01H0FB74RH8Z3C9CP696ACPC1G','xxxxxx');
print($kms->update_description_key($request));
```
Response
```text
key_id = 01H0FB74RH8Z3C9CP696ACPC1G, description = xxxxxx
```

### Sign
This function sign message with KMS key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/SignRequest.php';
require_once '../src/vcc_kms_client/models/SignAlgorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new SignRequest('01GZX850ZW3W4HC40T1ZX6V8NA', 'cuong dep zai', SignAlgorithm::SHA512_RSA);
print($kms->sign($request));
```
Response
```text
key_id = 01GZX850ZW3W4HC40T1ZX6V8NA, signature = C/PDWwJ2NpsqbwJTVDKqosFue+rs3dl+vKPbdVqh9zIc6Lnm33/WadCA2X+tMs87UOxaeuIn+NtgL6Jnh3ZgkkWB086ltp/YbccG+H9mxCc/OXKSP2hOZdO7bE5HXi4RyoXG3Mcv/ckXlgP02v9U2gehvQCOA9mcP3XDTZvHxCvU+WQpIt/QiNW3Ov150X7HrHt9vRFlX8cY1ciLH4esDcqshLY0Cw/SinB4hUJ8eX5DanQ/5VMZY12SLMQL+y9sifrmJNIe9WP0Gysp8yGPCwcO+zP49TrEs/zmMvkUscf3+0tJTFYetF4a4+zhI7QoaV/4FWPVaBVoh7kkb0HolQ==, sign_algorithm = SHA512withRSA
```

### Verify
This function verify message with KMS key
```php
<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/VerifyRequest.php';
require_once '../src/vcc_kms_client/models/SignAlgorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new VerifyRequest('01GZX850ZW3W4HC40T1ZX6V8NA', 'cuong dep zai', SignAlgorithm::SHA512_RSA, 'C/PDWwJ2NpsqbwJTVDKqosFue+rs3dl+vKPbdVqh9zIc6Lnm33/WadCA2X+tMs87UOxaeuIn+NtgL6Jnh3ZgkkWB086ltp/YbccG+H9mxCc/OXKSP2hOZdO7bE5HXi4RyoXG3Mcv/ckXlgP02v9U2gehvQCOA9mcP3XDTZvHxCvU+WQpIt/QiNW3Ov150X7HrHt9vRFlX8cY1ciLH4esDcqshLY0Cw/SinB4hUJ8eX5DanQ/5VMZY12SLMQL+y9sifrmJNIe9WP0Gysp8yGPCwcO+zP49TrEs/zmMvkUscf3+0tJTFYetF4a4+zhI7QoaV/4FWPVaBVoh7kkb0HolQ==');
print($kms->verify($request));
```
Response
```text
key_id = 01GZX850ZW3W4HC40T1ZX6V8NA, signature_valid = 1, sign_algorithm = SHA512withRSA
```
