<?php
include "config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$query = "INSERT INTO daftar_anggota(firstName, lastName, email, gender) VALUES ('$fname', '$lname', '$email', '$gender')";
$result = $conn->query($query);

if ($result) {
    echo "Selamat, Anda sudah menjadi anggota!";
}else{
    echo "Data belum benar, silahkan coba lagi.";
}
?>