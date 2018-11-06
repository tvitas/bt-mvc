<?php
function t($string = '', $options = [])
{
    if (!$string) {
        return;
    }
    $translated = '';
    $content = getTranslationFile();
    if ($content) {
        foreach ($content as $line) {
            if (strpos($line, '#') === 0) {
                continue;
            }
            if (strpos($line, $string) !== false) {
                $translated = trim(explode('=', trim($line))[1]);
                break;
            }
        }
    }

    if (!$translated) {
        $translated = $string;
    }

    if ($options && $translated) {
        $translated = strtr($translated, $options);
    }
    return sanitizeToPlain($translated);
}

function getTranslationFile()
{
    $lang = getLanguage();
    $fileName = preg_replace('/\*/', $lang, TRANSLATION_FILE_PATTERN);
    $file = TRANSLATION_DIR . $fileName;
    if (file_exists($file)) {
        return file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }
    return [];
}

<<<<<<< HEAD
=======
function ta($items = [])
{
    foreach ($items as $key => $val) {
        if (is_array($val)) {
            $val = ta($val);
        } else {
            $items[$key] = t($val);
        }
    }
    return $items;
}
>>>>>>> 64bf910f73817566ccc1fd2665d1e5394b96b193
