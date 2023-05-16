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
    const CHANGE_STATE_KEY_API = Constants::DOMAIN . '/kms-key/change-state';

    const UPDATE_ALIAS_API = Constants::DOMAIN . '/kms-key/update-alias';
    const DELETE_ALIAS_API = Constants::DOMAIN . '/kms-key/delete-alias';

    const GENERATE_DATA_KEY_API = Constants::DOMAIN . '/kms-key/generate-data-key';
    const GENERATE_DATA_KEY_PAIR_API = Constants::DOMAIN . '/kms-key/generate-data-key-pair';

    const UPDATE_DESCRIPTION_KEY_API = Constants::DOMAIN . '/kms-key/update-description';

    const GET_KEY_BY_ID_API = Constants::DOMAIN . '/kms-key/id';
    const LIST_KEY_API = Constants::DOMAIN . '/kms-key/list';
    const GET_KEY_BY_ALIAS_API = Constants::DOMAIN . '/kms-key/alias';
    const SIGN_API = Constants::DOMAIN . '/kms-key/sign';
    const VERIFY_API = Constants::DOMAIN . '/kms-key/verify';

}