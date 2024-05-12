<?php
// Ambil URL .m3u8 dari parameter query
$url = $_GET['url'];

// Validasi URL
if (filter_var($url, FILTER_VALIDATE_URL)) {
    // Set header agar dapat menyimpan konten dan mengirim ulang header
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/vnd.apple.mpegurl');
    
    // Ambil konten dari URL .m3u8 dan kirimkan
    echo file_get_contents($url);
} else {
    echo "URL tidak valid.";
}
?>
