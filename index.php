<?php
require_once 'configuration.php';

$requestUri = $_GET['uri'] ?? 'home';
$requestUri = str_replace('.php', '', $requestUri);
$requestUri = $requestUri . '.php';
$pagePath = 'pages/' . $requestUri;
require_once "header.php";
if (file_exists($pagePath) && is_file($pagePath)) {
    require_once $pagePath;
} else {
    require_once "errors/404.php";
}
require_once "footer.php";