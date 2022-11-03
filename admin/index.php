<?php
require_once "../configuration.php";

$requestUri = $_GET['uri'] ?? 'dashboard';
$requestUri = str_replace('.php', '', $requestUri);
$requestUri = $requestUri . '.php';

$pagePath = 'pages/' . $requestUri;
require_once "header.php";
require_once "aside.php";
if (file_exists($pagePath) && is_file($pagePath)) {
    require_once $pagePath;
} else {
    echo "errors/404.php";
}
require_once "footer.php";
