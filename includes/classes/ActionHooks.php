<?php
namespace DigitalTechnologia\MyIclinic;

use DigitalTechnologia\MyIclinic\EnqueueFiles;
use DigitalTechnologia\MyIclinic\ThemeConfig;

class ActionHooks {
    use EnqueueFiles;
    use ThemeConfig;

    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueueAssetFiles']);
        add_action('after_setup_theme', [$this, 'setupThemeConfig']);
    }
}
