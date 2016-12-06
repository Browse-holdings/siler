<?php

function load_dotenv($path) {
    $dotenv = new \Dotenv\Dotenv($path);
    return $dotenv->load();
}

function env($key = null, $default = null) {
    return __siler_retriver($key, $default, $_SERVER);
}
