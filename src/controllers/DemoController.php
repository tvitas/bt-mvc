<?php
function defaultAction($modelId = null)
{
    $pageVars = getPageVars();

    setMessage(t('Demo page'), 'primary');

    return renderResponse(
        null,
        array('pageVars' => $pageVars,
            'pageTitle' => t('Page'),
        )
    );
}
