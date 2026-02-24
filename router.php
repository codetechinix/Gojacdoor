<?php
/**
 * =========================================================================
 * Gojacdoors E-Commerce — Front Controller Router
 * Bypasses Apache directory/file conflicts on Render by acting as the
 * single entry point for all sub-page requests.
 * =========================================================================
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Prevent infinite loops if the router itself is requested
if ($uri === '/router.php') {
    http_response_code(404);
    include 'errors/404.php';
    exit;
}

// 1. Check if the exact physical file exists (e.g., assets, images, explicit .php calls)
$physicalPath = __DIR__ . $uri;
if (file_exists($physicalPath) && !is_dir($physicalPath)) {
    return false; // Let Apache serve the actual file directly
}

// 2. Clean URL mapping logic
// Strip trailing slashes to normalize (e.g., "/about-us/" -> "/about-us")
$uri = rtrim($uri, '/');

// Build the target PHP file path corresponding to the clean URL
$targetPhpFile = __DIR__ . $uri . '.php';

// 3. Resolve and serve the target PHP file
if (file_exists($targetPhpFile)) {
    // Explicitly set the script variables so the included file thinks it was called directly
    $_SERVER['SCRIPT_NAME'] = $uri . '.php';
    $_SERVER['PHP_SELF'] = $uri . '.php';

    // Process the requested page
    require $targetPhpFile;
} else {
    // If neither the clean URL `.php` file nor the physical file exists, trigger a 404
    http_response_code(404);
    require __DIR__ . '/errors/404.php';
}
?>