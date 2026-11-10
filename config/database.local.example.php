<?php
// Salin file ini menjadi config/database.local.php lalu sesuaikan.
// File database.local.php tidak boleh di-commit (sudah di .gitignore).
// Nilai di sini bisa di-override oleh environment variable CAREFLOW_DB_HOST/PORT/NAME/USER/PASS.
//
// Contoh InfinityFree (lihat Control Panel > MySQL Databases):
//   'host' => 'sqlXXX.infinityfree.com',
//   'port' => 3306,
//   'name' => 'if0_43391754_hospital',
//   'user' => 'if0_43391754',
//   'pass' => '<vPanel password>',
return [
    'host' => '127.0.0.1',
    'port' => null,            // null = auto (coba 3307 lalu 3306)
    'name' => 'hospital_system',
    'user' => 'root',
    'pass' => '',              // default XAMPP: kosong
];
