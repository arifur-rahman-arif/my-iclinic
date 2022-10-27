<?php

/**
 * Function getSVG
 * Include svg image with a span wrapper
 * @param  string $imagePath [explicits description]
 * @param  string $class     [explicits description]
 * @return void
 */
function getSVG(string $imagePath, string $class = '') {
    if (!$imagePath) {
        return null;
    }

    echo '<span class="' . esc_attr($class) . '">';
    include MY_ICLINIC_PATH . $imagePath;
    echo '</span>';
}

/**
 * Method lottie
 * Show the lottie animation
 * @param  string $path    [explicite description]
 * @param  array  $options [explicite description]
 * @return void
 */
function lottie(string $path, array $options = []) {
    echo '
<div class="lottie">
<lottie-player src="' .
        MY_ICLINIC_PATH_URL .
        $path .
        '" ?>"
background="transparent"
speed="1"
style="width: 5.3rem; height: 5.3rem;"
loop
autoplay>
</lottie-player>
</div>
';
}
