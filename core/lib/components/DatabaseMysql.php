<?php
function connectDb()
{
    $connection = array('connMsg' => 'Failrue',
        'dbHandler' => false,
        'connError' => 'Unknown error',
    );

    $db = false;

    if (defined('DB_HOST') and defined('DB_USER') and defined('DB_PASSWORD') and defined('DB_DATA')) {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATA);    
    } else {
        $connection['connMsg'] = 'Missing connection parameters.';
    }

    if (!$db) {
        $connection['connError'] = $db->connect_errno() . $db->connect_error();
    } else {
        $connection['connMsg']   = 'Connected';
        $connection['dbObject']  = $db;
        $connection['connError'] = 'No error';
    }
    return $connection;
}
