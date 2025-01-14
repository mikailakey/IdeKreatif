<?php

// Koneksi ke database (asumsikan config.php sudah berisi koneksi)
require_once("../config.php");

// Mulai session
session_start();

// Cek jika formulir dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query INSERT untuk memasukkan data ke tabel users
    $sql = "INSERT INTO users (username, name, password)
           VALUES ('$username', '$name', '$hashedPassword')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        // Jika berhasil, simpan notifikasi sukses ke session
        $_SESSION['notification'] = [
            'type' => 'primary',
            'message' => 'Registrasi Berhasil!'
        ];
    } else {
        // Jika gagal, simpan notifikasi error ke session
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'Gagal Registrasi: ' . mysqli_error($conn)
        ];
    }

    // Redirect ke halaman login
    header('Location: login.php');
    exit();
}

// Tutup koneksi database
$conn->close();
?>