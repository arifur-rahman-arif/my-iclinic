<?php

if (!defined('ABSPATH')) {
    return;
}

require_once trailingslashit(get_theme_file_path()) . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

if (!defined('MY_ICLINIC_PATH')) {
    define('MY_ICLINIC_PATH', trailingslashit(get_theme_file_path()));
}

if (!defined('MY_ICLINIC_PATH_URL')) {
    define('MY_ICLINIC_PATH_URL', trailingslashit(get_template_directory_uri()));
}

if (!defined('MY_ICLINIC_MODE')) {
    define('MY_ICLINIC_MODE', isset($_ENV['MY_ICLINIC_MODE']) ? $_ENV['MY_ICLINIC_MODE'] : 'production');
}

if (!defined('TEXT_DOMAIN')) {
    define('TEXT_DOMAIN', 'iclinic');
}

if (!defined('MY_ICLINIC_VERSION')) {
    define(
        'MY_ICLINIC_VERSION',
        MY_ICLINIC_MODE === 'development'
            ? time()
            : (isset($_ENV['MY_ICLINIC_VERSION'])
                ? $_ENV['MY_ICLINIC_VERSION']
                : '1.0.0')
    );
}

require_once MY_ICLINIC_PATH . 'includes/functions/nav-functions.php';
require_once MY_ICLINIC_PATH . 'includes/functions/utility-functions.php';

// Include & initiate classes
new \DigitalTechnologia\MyIclinic\ActionHooks();
// new \DigitalTechnologia\MyIclinic\ChatServer\ChatServer();
