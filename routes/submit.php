<?php
// Database configuration
$servername = "127.0.0.1"; // or your database server
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "project_magang"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$id_kantor = $_POST['id_kantor'];
$nama_kantor = $_POST['nama_kantor'];
$jenis_kantor = $_POST['jenis_kantor'];
$pso_non_pso = $_POST['pso_non_pso'];
$kcu_kc = $_POST['kcu_kc'];
$nomor_nde = $_POST['nomor_nde'];
$tanggal_nde = $_POST['tanggal_nde'];
$perihal = $_POST['perihal'];
$pejabat_pengirim_nde = $_POST['pejabat_pengirim_nde'];
$regional = $_POST['regional'];
$jenis_pengajuan = $_POST['jenis_pengajuan'];
$biaya_yang_diajukan = $_POST['biaya_yang_diajukan'];
$masa_sewa = $_POST['masa_sewa'];
$tmt = $_POST['tmt'];
$sd = $_POST['sd'];
$kinerja_2021 = $_POST['kinerja_2021'];
$kinerja_2022 = $_POST['kinerja_2022'];
$kinerja_2023 = $_POST['kinerja_2023'];

// Insert data into database
$sql = "INSERT INTO izin_operasi (id_kantor, nama_kantor, jenis_kantor, pso_non_pso, kcu_kc, nomor_nde, tanggal_nde, perihal, pejabat_pengirim_nde, regional, jenis_pengajuan, biaya_yang_diajukan, masa_sewa, tmt, sd, kinerja_2021, kinerja_2022, kinerja_2023)
VALUES ('$id_kantor', '$nama_kantor', '$jenis_kantor', '$pso_non_pso', '$kcu_kc', '$nomor_nde', '$tanggal_nde', '$perihal', '$pejabat_pengirim_nde', '$regional', '$jenis_pengajuan', '$biaya_yang_diajukan', '$masa_sewa', '$tmt', '$sd', '$kinerja_2021', '$kinerja_2022', '$kinerja_2023')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
