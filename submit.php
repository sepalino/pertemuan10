<?php
$nama = $_POST['nama'];
$angka1=$_POST['angka1'];
$angka2=$_POST['angka2'];

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
$modulus = $angka1 % $angka2;

echo "<h1>PERHITUNGAN ARITMATIKA </h1>";
echo "Nama : <b>$nama</b> <br>";
echo "$angka1 + $angka2 = $tambah <br>";
echo "$angka1 - $angka2 = $kurang <br>";
echo "$angka1 * $angka2 = $perkalian <br>";
echo "$angka1 / $angka2 = $pembagian <br>";
echo "$angka1 % $angka2 = $modulus <br>";
?>