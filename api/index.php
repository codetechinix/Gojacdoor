<?php
/**
 * Vercel Serverless Entry Router
 * 
 * Vercel's modern functions block requires all logic to start inside the `api/` directory.
 * Since this is a multi-page app and not a single-entry framework like Laravel, 
 * this script acts as a powerful internal router, mapping clean URLs to the correct 
 * PHP files in the root directory while maintaining security.
 */

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH);
$route = ltrim($path, '/');

// Security: Prevent direct access to sensitive internal directories
if (preg_match('#^(includes|errors)/#', $route)) {
    http_response_code(403);
    require __DIR__ . '/../errors/403.php';
    exit;
}

// Map the clean URL route to the actual PHP file
if ($route === '' || $route === 'index' || $route === 'index.php') {
    $scriptfile = __DIR__ . '/../index.php';
} else {
    // If no explicit extension is provided, assume it's a clean PHP request
    $ext = pathinfo($route, PATHINFO_EXTENSION);
    if ($ext === '') {
        $scriptfile = __DIR__ . '/../' . $route . '.php';
    } else {
        $scriptfile = __DIR__ . '/../' . $route;
    }
}

// Validate file exists before executing to prevent fatal error screens
if (file_exists($scriptfile) && is_file($scriptfile)) {
    // Adjust server variables so the required script thinks it was accessed directly
    $_SERVER['SCRIPT_FILENAME'] = realpath($scriptfile);
    chdir(dirname($scriptfile));

    // Execute the target page
    require $scriptfile;
} else {
    // Graceful fallback to custom 404 page
    http_response_code(404);
    require __DIR__ . '/../errors/404.php';
}
