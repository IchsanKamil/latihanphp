<?php

// variable di PHP
$namavariable = 10;

$angka = 100; // integer
$desimal = 0.32; // double / float
$teks = "ini teks"; // string
$teks_alternatif = 'ini teks juga';
$boolean = true; // boolean, nilainya hanya true & false
$boolean_false = false;

echo $boolean . '<br>';
print $teks . '<br>';
printf("contoh: %s halo", $teks); // function, variable yg dimasukin disebut parameter
echo '<br>';

$satu = sprintf("nilai angka adalah %f", $desimal); // output dari function yg dimasukan ke dalam variable
echo $satu;
echo '<br>';

// beda kutif satu & dua
echo "nilai variable $angka <br>";
echo 'nilai variable $angka <br>';

// contoh yg bener utk nulis pada kutif
echo "nilai variable " . $angka . "<br>";

// perhitungan dengan variable
echo $angka * $desimal . "<br>";

// contoh yang bener utk perhitungan variable
$hasil = $angka * $desimal;
echo $hasil . "<br>";

$judul_artikel = 'Artikel terbaru';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Variable</title>
</head>
<body>

hasil:
<?php echo $hasil; ?>

contoh lain untuk echo
<h1><?= $judul_artikel; ?></h1>

</body>
</html>