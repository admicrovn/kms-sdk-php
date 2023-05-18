<?php

require_once '../src/vcc_kms_client/auth/KMSCredentials.php';
require_once '../src/vcc_kms_client/KMSClient.php';
require_once '../src/vcc_kms_client/models/VerifyRequest.php';
require_once '../src/vcc_kms_client/models/SignAlgorithm.php';

$credentials = new KMSCredentials('security_file.json');
$kms = new KMSClient($credentials);
$request = new VerifyRequest('01GZX850ZW3W4HC40T1ZX6V8NA', 'cuong dep zai', SignAlgorithm::SHA512_RSA, 'C/PDWwJ2NpsqbwJTVDKqosFue+rs3dl+vKPbdVqh9zIc6Lnm33/WadCA2X+tMs87UOxaeuIn+NtgL6Jnh3ZgkkWB086ltp/YbccG+H9mxCc/OXKSP2hOZdO7bE5HXi4RyoXG3Mcv/ckXlgP02v9U2gehvQCOA9mcP3XDTZvHxCvU+WQpIt/QiNW3Ov150X7HrHt9vRFlX8cY1ciLH4esDcqshLY0Cw/SinB4hUJ8eX5DanQ/5VMZY12SLMQL+y9sifrmJNIe9WP0Gysp8yGPCwcO+zP49TrEs/zmMvkUscf3+0tJTFYetF4a4+zhI7QoaV/4FWPVaBVoh7kkb0HolQ==');
print($kms->verify($request));