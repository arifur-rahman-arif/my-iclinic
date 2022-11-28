<?php

/**
 * Function getHeaderMenu
 * Get the header menu from WordPress theme's menu setting
 * @return void
 */
function getHeaderMenu() {
    wp_nav_menu([
        'theme_location' => 'headerMenu',
        'container' => '',
        'fallback_cb' => false,
        'item_spacing' => 'discard',
        'depth' => 2,
    ]);
}

/**
 * Function getFooterMenu
 * Get the footer menu from WordPress theme's menu setting
 * @return void
 */
function getFooterMenu() {
    wp_nav_menu([
        'theme_location' => 'footerMenu',
        'container' => '',
        'fallback_cb' => false,
    ]);
}
