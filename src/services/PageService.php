<?php
function getPageVars()
{
    $siteData = array('metaTitle' => 'BT-MVC', 'siteName' => t('Simple and Easy'));

    if (file_exists(sanitizeSlash(SRC_DIR . 'site/site.json'))) {
        $json = file_get_contents(sanitizeSlash(SRC_DIR . 'site/site.json'));
        $siteData = json_decode($json, true)['site'];
        foreach ($siteData as $key => $item) {
            $siteData[$key] = t($item);
        }
    }

    return $siteData;
}
