<?php
namespace DigitalTechnologia\MyIclinic;

trait EnqueueFiles
{
    public function enqueueAssetFiles()
    {
        $this->loadStyles();
        $this->loadScripts();
    }

    /**
     * Method loadScripts
     * Load the required JS files for the project
     * @return void
     */
    public function loadScripts()
    {
        // Include external JS libraries here
        wp_enqueue_script(
            'swiper-js',
            MY_ICLINIC_PATH_URL . 'assets/lib/scripts/swiper.min.js',
            [],
            MY_ICLINIC_VERSION,
            false
        );
        wp_enqueue_script(
            'lottie-js',
            MY_ICLINIC_PATH_URL . 'assets/lib/scripts/lottie-player.js',
            [],
            MY_ICLINIC_VERSION,
            false
        );

        if (MY_ICLINIC_MODE === 'development') {
            wp_enqueue_script(
                'react-development',
                MY_ICLINIC_PATH_URL . 'assets/lib/scripts/react.development.js',
                [],
                MY_ICLINIC_VERSION,
                true
            );
            wp_enqueue_script(
                'react-dom-development',
                MY_ICLINIC_PATH_URL . 'assets/lib/scripts/react-dom.development.js',
                [],
                MY_ICLINIC_VERSION,
                true
            );
            wp_enqueue_script(
                'iclinic-js',
                MY_ICLINIC_PATH_URL . 'build/scripts/main.js',
                [],
                MY_ICLINIC_VERSION,
                true
            );
        } else {
            wp_enqueue_script(
                'react-production',
                MY_ICLINIC_PATH_URL . 'assets/lib/scripts/react.production.min.js',
                [],
                MY_ICLINIC_VERSION,
                true
            );
            wp_enqueue_script(
                'react-dom-production',
                MY_ICLINIC_PATH_URL . 'assets/lib/scripts/react-dom.production.min.js',
                [],
                MY_ICLINIC_VERSION,
                true
            );
            wp_enqueue_script(
                'iclinic-js',
                MY_ICLINIC_PATH_URL . 'build/scripts/main.min.js',
                [],
                MY_ICLINIC_VERSION,
                true
            );
        }

        // Include the react components
        wp_enqueue_script(
            'react-date-time',
            MY_ICLINIC_PATH_URL . 'react-components/date-time/build/index.js',
            [],
            MY_ICLINIC_VERSION,
            true
        );
    }

    /**
     * Method loadStyles
     * Load the required CSS files for the project
     * @return void
     */
    public function loadStyles()
    {
        wp_enqueue_style('my-iclinic-theme-css', get_stylesheet_uri());
        wp_enqueue_style(
            'swiper-css',
            MY_ICLINIC_PATH_URL . 'assets/lib/styles/swiper.min.css',
            [],
            MY_ICLINIC_VERSION,
            'all'
        );
        wp_enqueue_style(
            'tailwind-css',
            MY_ICLINIC_PATH_URL . 'build/styles/tailwind.css',
            [],
            MY_ICLINIC_VERSION,
            'all'
        );

        if (MY_ICLINIC_MODE === 'development') {
            //
        } else {
            wp_enqueue_style(
                'iclinic-css',
                MY_ICLINIC_PATH_URL . 'build/styles/main.min.css',
                [],
                MY_ICLINIC_VERSION,
                'all'
            );

            // Include the react components styles
            wp_enqueue_style(
                'iclinic-react-date-time',
                MY_ICLINIC_PATH_URL . 'react-components/date-time/build/styles/main.min.css',
                [],
                MY_ICLINIC_VERSION,
                'all'
            );
        }
    }
}
