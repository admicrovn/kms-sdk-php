<?php

class Constants
{
    const DOMAIN = 'https://dev.kms.admicro.vn:31087';
    const CREATE_KEY_API = Constants::DOMAIN . "/kms-key/create";

    const ENCRYPT_API =  Constants::DOMAIN . '/kms-key/encrypt';
    const ENCRYPT_WITH_DATA_KEY_API =  Constants::DOMAIN . '/kms-key/encrypt-with-data-key';
    const ENCRYPT_WITH_DATA_KEY_PAIR_API =  Constants::DOMAIN . '/kms-key/encrypt-with-data-key-pair';

    const DECRYPT_API = Constants::DOMAIN . '/kms-key/decrypt';
    const DECRYPT_WITH_DATA_KEY_API = Constants::DOMAIN . '/kms-key/decrypt-with-data-key';
    const DECRYPT_WITH_DATA_KEY_PAIR_API = Constants::DOMAIN . '/kms-key/decrypt-with-data-key-pair';
}