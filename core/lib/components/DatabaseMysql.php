<?php
function connectDb()
{
    if (defined('DB_HOST') and defined('DB_USER') and defined('DB_PASSWORD') and defined('DB_DATA')) {
        return new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATA);
    }
    return false;
}
