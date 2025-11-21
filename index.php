<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

$host = $_SERVER['HTTP_HOST'];
if ($host === 'localhost') {
    $basePath = '/newhydrogen';
} else {
    $basePath = '';
}
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');
$page = $path === '' ? 'home' : $path;

// Handle special-report redirect before any output
if ($page === 'special-report') {
    header('Location: videos', true, 301);
    exit;
}

if ($page === 'report') {
    header('Location: special-report-October-2025', true, 301);
    exit;
}


// For load Assets
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$current_url = $protocol . "://" . $domain;


if ($domain === 'localhost' || $domain === '127.0.0.1') {
    $full_url = $current_url . '/newhydrogen/';
} else {
    $full_url = $current_url . '/';
}


include './includes/header.php';
include './includes/router.php';
include './includes/footer.php';
