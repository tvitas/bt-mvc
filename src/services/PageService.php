<?php
function getMenu()
{
    $siteMenu = array(array('title' => 'Home', 'link' => '/'));
    $siteData = loadSiteData('menu');
    if ($siteData) {
        $siteMenu = ta($siteData);
    }

    $url = getBaseUrl();

    foreach ($siteMenu as $key => $value) {
        $siteMenu[$key]['link'] = $url . $value['link'];
    }
    return $siteMenu;
}

function getPageVars()
{
    $pageVars = array('metaTitle' => 'BT-MVC', 'siteName' => t('Simple and Easy'));
    $siteData = loadSiteData('site');
    if ($siteData) {
        $pageVars = ta($siteData);
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
