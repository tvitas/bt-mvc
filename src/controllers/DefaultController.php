<?php
function defaultAction($modelId = null)
{
    $pageVars = getPageVars();

    setMessage(t('Front page'), 'primary');

    return renderResponse(
        null,
        array('pageVars' => $pageVars,
            'pageTitle' => t('Welcome'),
        )
    );
}
