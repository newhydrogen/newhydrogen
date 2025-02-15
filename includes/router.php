<?php
$host = $_SERVER['HTTP_HOST'];

if ($host === 'localhost') {
    $basePath = '/newhydrogen'; 
} else {
    $basePath = '';
}

// Get the requested URI and clean it
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');

echo $requestUri;

// Extract path segments
$pathParts = explode('/', $path);
$page = $pathParts[0] ?? '';

// Define valid static pages
$validPages = ['home', 'about', 'technology', 'application', 'team', 'market', 'news-archive', 'newsroom', 'news-commentary', 'investor', 'contact', 'short-videos', 'videos', 'thermoloop-video', 'ceo-podcast', 'webinar'];

// Dynamic video categories
$videoCategories = ['news-commentary', 'ceo-podcast', 'short-videos'];


if (strpos($requestUri, 'single-news.php') !== false && isset($_GET['id'])) {
    include __DIR__ . '/../pages/single-news.php';
    echo "it's testing side, no worries";
    exit;
}

// Handle homepage request
if ($page === '') {
    include __DIR__ . '/../pages/home.php';
} 

// Handle dynamic video category pages (e.g., /videos/news-commentary/slug)
elseif ($page === 'videos' && isset($pathParts[1]) && in_array($pathParts[1], $videoCategories) && isset($pathParts[2])) {
    $category = $pathParts[1];
    $_GET['slug'] = $pathParts[2];
    include __DIR__ . '/../pages/videos/' . $category . '/index.php';
} 

// Serve static pages
elseif (in_array($page, $validPages)) {
    include __DIR__ . '/../pages/' . $page . '.php';
} 

// Serve 404 page for invalid routes
else {
    include __DIR__ . '/../pages/404.php';
}