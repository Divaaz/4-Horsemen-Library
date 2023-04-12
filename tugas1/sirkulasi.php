<?php
include "config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$id_buku = $_POST['id_buku'];

$query = "INSERT INTO sirkulasi(firstName, lastName, email, id_buku, tgl_pinjam) VALUES ('$fname', '$lname', '$email', '$id_buku', NOW())";
$result = $conn->query($query);

if ($result) {
    echo "Peminjaman berhasil dilakukan.";
} else {
    echo "Data belum benar, silahkan coba lagi.";
}
?>