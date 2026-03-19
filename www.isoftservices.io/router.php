<?php
/**
 * PHP built-in server router — handles clean URLs (no .php / .html extension).
 * Usage: php -S localhost:8000 router.php
 *        (run from inside www.isoftservices.io/)
 */

$uri  = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$root = __DIR__;

// 1. Serve existing real files (css, js, images, fonts, etc.) directly
if ($uri !== '/' && file_exists($root . $uri)) {
    return false; // let the built-in server handle it
}

// 2. If the URI already has an extension, try to serve it directly
if (pathinfo($uri, PATHINFO_EXTENSION) !== '') {
    return false;
}

// 3. Try /uri.php  (preferred)
$php = $root . rtrim($uri, '/') . '.php';
if (file_exists($php)) {
    $_SERVER['SCRIPT_FILENAME'] = $php;
    require $php;
    return true;
}

// 4. Try /uri/index.php
$phpIndex = $root . rtrim($uri, '/') . '/index.php';
if (file_exists($phpIndex)) {
    $_SERVER['SCRIPT_FILENAME'] = $phpIndex;
    require $phpIndex;
    return true;
}

// 5. Try /uri.html
$html = $root . rtrim($uri, '/') . '.html';
if (file_exists($html)) {
    header('Content-Type: text/html');
    readfile($html);
    return true;
}

// 6. Not found
http_response_code(404);
echo "<h1>404 Not Found</h1><p>$uri</p>";
return true;
