<?php

if (!defined('ABSPATH')) {
    return;
}

if (!defined('MY_ICLINIC_VERSION')) {
    define('MY_ICLINIC_VERSION', '1.0.0');
    // define('MY_ICLINIC_VERSION', time());
}

if (!defined('MY_ICLINIC_PATH')) {
    define('MY_ICLINIC_PATH', trailingslashit(get_theme_file_path()));
}

if (!defined('MY_ICLINIC_PATH_URL')) {
    define('MY_ICLINIC_PATH_URL', trailingslashit(get_template_directory_uri()));
}

if (!defined('MY_ICLINIC_MODE')) {
    // define('MY_ICLINIC_MODE', 'development');
    define('MY_ICLINIC_MODE', 'production');
}

require_once MY_ICLINIC_PATH.'vendor/autoload.php';
require_once MY_ICLINIC_PATH.'includes/functions/nav-functions.php';
require_once MY_ICLINIC_PATH.'includes/functions/utility-functions.php';

// Include & initiate classes
new \DigitalTechnologia\MyIclinic\ActionHooks();