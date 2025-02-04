<?php

$uri = $_SERVER['REQUEST_URI'];
$base_uri = '/LifeTime';

switch($uri) {
    case $base_uri . '/':
        require 'controller/index.php';
        break;
    case $base_uri . '/about':
        require 'controller/about.php';
        break;
    default:
        header("Location: /LifeTime/views/404");
        exit();
}