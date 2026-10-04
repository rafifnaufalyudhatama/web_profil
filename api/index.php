<?php

// Pastikan direktori sementara /tmp untuk view dan cache tersedia di serverless Vercel
$storageDirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Forward request ke entry point Laravel
require __DIR__ . '/../public/index.php';
