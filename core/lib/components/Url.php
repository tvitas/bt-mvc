<?php
function getBaseUrl()
{
    if ('Off' === IS_MOD_REWRITE ) {
        return BASE_URL . INDEX_NAME . '/';
    }
    return BASE_URL;
}
