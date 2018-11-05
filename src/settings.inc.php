<?php
// Sanitizing html input
define('ALLOW_HTML_TAGS', '<strong><b><em><i><p><ul><div>');

// Language support
define('LANGUAGE_DEFAULT', 'lt');
define('LANGUAGE_FALLBACK', 'en');
define('LANGUAGE_SUPPORT', array('en', 'lt'));

// Translations
define('TRANSLATION_DIR', RESOURCE_DIR . 'translations' . DIRECTORY_SEPARATOR);
define('TRANSLATION_FILE_PATTERN', 'strings_*.l10n');

// Auth required
define('AUTH_REQUIRED', array('admin'));
define('AUTH_URL', 'auth' . DIRECTORY_SEPARATOR);

// Database
define('DB_HOST', 'localhost');
define('DB_USER', 'web_dev');
define('DB_PASSWORD', '!web!dev!');
define('DB_DATA', 'staff');
