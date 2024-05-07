<?php
// Ambil URL dari parameter GET
$url = $_GET['url'];

// Set header agar konten dapat dimuat dalam iframe
header("Content-Security-Policy: frame-ancestors 'self'");
header("X-Frame-Options: allowall");

// Buka URL eksternal dan kirimkan kembali konten
echo file_get_contents($url);
?>
