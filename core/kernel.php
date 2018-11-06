<?php
function run()
{
    $components = autoLoad();

    if (-1 !== $components) {
        return $components;
    }

    $request  = getRequest();

    $route    = getRoute($request);

    $auth     = getAuthRequest($request);

    $lang     = getLanguageRequest($request);

    $callback = getCallback();

    if ($auth) {
        return redirectResponse($auth);
    }

    if ($callback) {
        $location = $callback;
        endCallback();
        return redirectResponse($callback);
    }

    if ($lang) {
        setLanguage($lang);
    }

    extract($route);

    if (file_exists($controller)) {
        include_once($controller);
        if (function_exists($action)) {
            $response = $action($model);
        } else {
            $response = httpStatusResponse('404');
        }
    } else {
        $response = httpStatusResponse('400');
    }

    if ($response) {
        $send = sendResponse($response);
        return -1;
    } else {
        return 'Empty response.';
    }
}

function autoLoad()
{
    //$components = glob(CORE_COMPONENTS_DIR . '*.php', GLOB_ERR);
    if (file_exists(CORE_DIR . 'autoload.json')) {
        $components = json_decode(file_get_contents(CORE_DIR . 'autoload.json'), true);
    } else {
        return 'Structure mismatch: ' . 'autoload.json';
    }
    if (isset($components['autoload'])) {
        foreach ($components['autoload'] as $component => $files) {
            $componentDir = strtoupper($component) . '_DIR';
            if (!defined($componentDir)) {
                return 'Structure mismatch: component directory';
            }
            foreach ($files as $file) {
                if (file_exists(constant($componentDir) . $file)) {
                    include_once constant($componentDir) . $file;
                } else {
                    return 'Structure mismatch: ' . $file;
                }
            }
        }
    } else {
        return 'Structure mismatch: autoload';
    }
    return -1;
}
