<?php
function getMenu()
{
<<<<<<< HEAD
    $siteMenu = array(array('title' => 'Home', 'link' => ''));
    $siteData = loadSiteData('menu');

    if ($siteData) {
        $siteMenu = $siteData;
    }

    $baseUrl = getBaseUrl();

    foreach ($siteMenu as $key => $value) {
        $siteMenu[$key]['link'] = $baseUrl . $value['link'];
=======
    $siteMenu = array(array('title' => 'Home', 'link' => '/'));
    $siteData = loadSiteData('menu');
    if ($siteData) {
        $siteMenu = ta($siteData);
    }

    $url = getBaseUrl();

    foreach ($siteMenu as $key => $value) {
        $siteMenu[$key]['link'] = $url . $value['link'];
>>>>>>> 64bf910f73817566ccc1fd2665d1e5394b96b193
    }
    return $siteMenu;
}

function getPageVars()
{
    $pageVars = array('metaTitle' => 'BT-MVC', 'siteName' => t('Simple and Easy'));
    $siteData = loadSiteData('site');
    if ($siteData) {
<<<<<<< HEAD
        $pageVars = $siteData;
=======
        $pageVars = ta($siteData);
>>>>>>> 64bf910f73817566ccc1fd2665d1e5394b96b193
    }
    return $pageVars;
}

function loadSiteData($element)
{
    if (file_exists(sanitizeSlash(SRC_DIR . 'site/site.json'))) {
        $json = file_get_contents(SRC_DIR . 'site/site.json');
        if ($json) {
            return json_decode($json, true)[$element];
        }
    }
    return false;
}
