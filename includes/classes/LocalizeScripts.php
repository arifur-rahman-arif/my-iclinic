<?php
namespace DigitalTechnologia\MyIclinic;

trait LocalizeScripts {
    /**
     * Method localizeJsScripts
     *
     * Localize JavaScript scripts with php data through variables
     * @return void
     */
    public function localizeJsScripts() {
        wp_localize_script('iclinic-js', 'iclinic', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'siteUrl' => site_url('/'),
            'restUrl' => site_url('/') . 'wp-json/wp/v2/',
            'assetsUrl' => MY_ICLINIC_PATH_URL,
            'nonce' => wp_create_nonce('wp_rest'),
        ]);
    }
}
