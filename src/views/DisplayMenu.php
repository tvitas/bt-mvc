<?php
function displayMenu()
{
    if (function_exists('getMenu')) {
        return renderResponse('menu/menu', array('menu'=>getMenu()), 'html', false);
    }
    return '';
}
