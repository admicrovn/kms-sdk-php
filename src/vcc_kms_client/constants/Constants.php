<?php

class Constants
{
    const CREATE_KEY_API = "/kms-key/create";

    const ENCRYPT_API =  '/kms-key/encrypt';
    const ENCRYPT_WITH_DATA_KEY_API =  '/kms-key/encrypt-with-data-key';
    const ENCRYPT_WITH_DATA_KEY_PAIR_API =  '/kms-key/encrypt-with-data-key-pair';

    const DECRYPT_API = '/kms-key/decrypt';
    const DECRYPT_WITH_DATA_KEY_API = '/kms-key/decrypt-with-data-key';
    const DECRYPT_WITH_DATA_KEY_PAIR_API = '/kms-key/decrypt-with-data-key-pair';
    const CHANGE_STATE_KEY_API = '/kms-key/change-state';

    const UPDATE_ALIAS_API = '/kms-key/update-alias';
    const DELETE_ALIAS_API = '/kms-key/delete-alias';

    const GENERATE_DATA_KEY_API = '/kms-key/generate-data-key';
    const GENERATE_DATA_KEY_PAIR_API = '/kms-key/generate-data-key-pair';

    const UPDATE_DESCRIPTION_KEY_API = '/kms-key/update-description';

    const GET_KEY_BY_ID_API = '/kms-key/id';
    const LIST_KEY_API = '/kms-key/list';
    const GET_KEY_BY_ALIAS_API = '/kms-key/alias';
    const SIGN_API = '/kms-key/sign';
    const VERIFY_API = '/kms-key/verify';

}