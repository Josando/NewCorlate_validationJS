<?php

function debugPHP($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function debugChrome($array) {
    include 'libs/chromephp-master/ChromePhp.php';
    //ChromePhp::log('Hello console!');
    ChromePhp::log($array);
    //ChromePhp::warn('something went wrong!');
}

function redirect($url) {
    die('<script>window.location.href="' . $url . '";</script>');
}
