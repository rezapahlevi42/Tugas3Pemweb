<?php
$nim = "";
$nama = "";
$jenisKelamin = "";
$prodi = "";

if ($_SERVER && isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] === "POST") {
  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $jenisKelamin = $_POST["jenisKelamin"];
  $prodi = $_POST["prodi"];
}

if ($nim && $nama && $jenisKelamin && $prodi) {
  echo "<h2>Data yang Dikirimkan</h2>";
  echo "<ul>";
  echo "<li>NIM: $nim</li>";
  echo "<li>Nama: $nama</li>";
  echo "<li>Jenis Kelamin: $jenisKelamin</li>";
  echo "<li>Prodi: $prodi</li>";
  echo "</ul>";
}
?>
