<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "penyewaan";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
$queryInsertBarang = "INSERT INTO Barang (id_barang, nama_barang, jenis_barang, harga_sewa) VALUES
    ('001T', 'TENDA KAPASITAS 4-5 ORANG DOUBLE LAYER', 'TENDA', 35000),
    ('002T', 'TENDA KAPASITAS 2-3 ORANG DOUBLE LAYER', 'TENDA', 30000),
    ('003T', 'TENDA KAPASITAS 2-3 ORANG SINGLE LAYER', 'TENDA', 22000),
    ('001C', 'SLEEPING BAG POLAR', 'ALAT TIDUR', 8000),
    ('002C', 'MATRAS', 'ALAT TIDUR', 5000),
    ('003C', 'MATRAS ALUMUNIUM FOIL', 'ALAT TIDUR', 7000),
    ('001B', 'LAMPU TENDA', 'PENERANGAN', 4000),
    ('002B', 'HEADLAMP CAS', 'PENERANGAN', 7000),
    ('001M', 'NESTING TNI', 'ALAT MASAK', 8000),
    ('002M', 'KOMPOR', 'ALAT MASAK', 7000),
    ('003M', 'KOMPOR PORTABLE', 'ALAT MASAK', 8000),
    ('004M', 'GAS PORTABLE', 'ALAT MASAK', 6000),
    ('001A', 'CARRIER 60L', 'TREKKING', 30000),
    ('002A', 'CARRIER 45L', 'TREKKING', 25000),
    ('003A', 'SEPATU HIKING', 'TREKKING', 25000)";
mysqli_query($conn, $queryInsertBarang);
mysqli_close($conn);

echo "Database dan tabel berhasil dibuat.";
