<?php

// Inisialisasi Environment Variables penting untuk Serverless Vercel
$envVars = [
    'APP_KEY' => 'base64:Y7DLHXHINllYDBwNlEn57sT5N/gSKuPjk0H8sRCxXk4=',
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'true',
    'SESSION_DRIVER' => 'array',
    'CACHE_STORE' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'VIEW_COMPILED_PATH' => '/tmp/views',
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
];

foreach ($envVars as $key => $val) {
    if (!getenv($key)) {
        putenv("{$key}={$val}");
    }
    $_ENV[$key] = $val;
    $_SERVER[$key] = $val;
}

// Pastikan direktori sementara /tmp untuk view dan cache tersedia di serverless Vercel
$storageDirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
    '/tmp/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// Bersihkan view terkompilasi lama di /tmp/views agar selalu menyajikan template terbaru
if (is_dir('/tmp/views')) {
    $cachedViews = glob('/tmp/views/*.php');
    if ($cachedViews) {
        foreach ($cachedViews as $cv) {
            @unlink($cv);
        }
    }
}

// Forward request ke entry point Laravel
require __DIR__ . '/../public/index.php';
