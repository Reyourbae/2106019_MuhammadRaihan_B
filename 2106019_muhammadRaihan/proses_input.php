<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keretapi";

$conn = new mysqli($servername, $username, $password, $dbname);

$id_penumpang = $_POST['id_penumpang'];
$stasiun_asal = $_POST['stasiun_asal'];
$stasiun_tujuan = $_POST['stasiun_tujuan'];
$kelas = $_POST['kelas'];
$date = $_POST['date'];
$Dewasa = $_POST['Dewasa'];
$Bayi = $_POST['Bayi'];


if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO penumpang (id_penumpang, stasiun_asal, stasiun_tujuan, kelas, tanggal_keberangkatan, dewasa, bayi)
VALUES ('$id_penumpang', '$stasiun_asal', '$stasiun_tujuan', '$kelas', '$date', '$Dewasa', '$Bayi')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>