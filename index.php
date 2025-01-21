<?php
// Fungsi untuk mendeteksi apakah script berjalan di GitHub Actions
function isGitHubActions() {
    return getenv('GITHUB_ACTIONS') === 'true';
}

// IP fiktif yang ingin ditampilkan di GitHub Actions
$fake_ip = '192.168.0.1';

// Mendapatkan IP asli
$real_ip = $_SERVER['SERVER_ADDR'];

// Menampilkan IP sesuai lingkungan
if (isGitHubActions()) {
    echo "Alamat IP server (GitHub Actions): " . $fake_ip;
} else {
    echo "Alamat IP server (Lokal): " . $real_ip;
}
