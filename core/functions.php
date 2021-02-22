<?php

use core\base\Lang;

function debug($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function upperCamelCase($name) {
    $name = str_replace('-', ' ', $name);
    $name = ucwords($name);
    $name = str_replace(' ', '', $name);
    
    return $name;
}

function lowerCamelCase($name) {
    $name = upperCamelCase($name);
    $name = lcfirst($name);
    
    return $name;
}

function isAjax() {
    return 
        isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
        && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
}

function redirect($http = false) {
    if ($http) {
        $redirect = $http;
    } else {
        $redirect = $_SERVER['HTTP_REFERER'] ?? '/';
    }
    header("Location: $redirect");
    exit;
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

function __($key = 'default') {
    return Lang::get($key);
}

function icon($name) {
    $icon = APP . '/icons/' . $name . '.svg';
    return file_get_contents($icon);
}