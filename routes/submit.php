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

// Function to sanitize input data
function sanitize($input) {
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(strip_tags($input)));
}

// Determine which form submitted the data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['from_update_page'])) {
        // Data from entry.blade.php form
        $nomor_nde = sanitize($_POST['nomor_nde']);
        $tanggal = sanitize($_POST['tanggal']);
        $perihal = sanitize($_POST['perihal']);
        $keterangan = sanitize($_POST['keterangan']);
        $status = sanitize($_POST['status']);

        // Insert into update_data table
        $sql = "INSERT INTO update_data (nomor_nde, tanggal, perihal, keterangan, status)
                VALUES ('$nomor_nde', '$tanggal', '$perihal', '$keterangan', '$status')";
    } elseif (isset($_POST['from_entry_page'])) {
        // Data from update.blade.php form
        $id_kantor = sanitize($_POST['id_kantor']);
        $nama_kantor = sanitize($_POST['nama_kantor']);
        $jenis_kantor = sanitize($_POST['jenis_kantor']);
        $pso_non_pso = sanitize($_POST['pso_non_pso']);
        $kcu_kc = sanitize($_POST['kcu_kc']);
        $nomor_nde = sanitize($_POST['nomor_nde']);
        $tanggal_nde = sanitize($_POST['tanggal_nde']);
        $perihal = sanitize($_POST['perihal']);
        $pejabat_pengirim_nde = sanitize($_POST['pejabat_pengirim_nde']);
        $regional = sanitize($_POST['regional']);
        $jenis_pengajuan = sanitize($_POST['jenis_pengajuan']);
        $biaya_yang_diajukan = sanitize($_POST['biaya_yang_diajukan']);
        $masa_sewa = sanitize($_POST['masa_sewa']);
        $tmt = sanitize($_POST['tmt']);
        $sd = sanitize($_POST['sd']);
        $kinerja_2021 = sanitize($_POST['kinerja_2021']);
        $kinerja_2022 = sanitize($_POST['kinerja_2022']);
        $kinerja_2023 = sanitize($_POST['kinerja_2023']);

        // Insert into izin_operasi table
        $sql = "INSERT INTO izin_operasi (id_kantor, nama_kantor, jenis_kantor, pso_non_pso, kcu_kc, nomor_nde, tanggal_nde, perihal, pejabat_pengirim_nde, regional, jenis_pengajuan, biaya_yang_diajukan, masa_sewa, tmt, sd, kinerja_2021, kinerja_2022, kinerja_2023)
                VALUES ('$id_kantor', '$nama_kantor', '$jenis_kantor', '$pso_non_pso', '$kcu_kc', '$nomor_nde', '$tanggal_nde', '$perihal', '$pejabat_pengirim_nde', '$regional', '$jenis_pengajuan', '$biaya_yang_diajukan', '$masa_sewa', '$tmt', '$sd', '$kinerja_2021', '$kinerja_2022', '$kinerja_2023')";
    }

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
