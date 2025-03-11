<?php

require_once(dirname(__FILE__, 2). '/src/config/config.php');
//o 2 representa o nível do diretório acima de onde estou

//require_once(VIEW_PATH .  '/Login.php');
//require_once(CONTROLLER_PATH .  '/Login.php');
// require_once(CONTROLLER_PATH .  '/day_records.php');
$basePath = '/';
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

if($uri ==='/' || $uri ===''){
    $uri = '/login.php';
}


require_once(CONTROLLER_PATH . "/${uri}");