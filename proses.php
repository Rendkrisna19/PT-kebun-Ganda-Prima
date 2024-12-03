<?php
include('koneksi.php');

// Memeriksa apakah data dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Query untuk menyimpan data ke tabel
    $sql = "INSERT INTO users (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Saran sudah terkirim');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>