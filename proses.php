<?php

echo '<pre>';

echo 'REQUEST <br>';
var_dump($_REQUEST);

echo 'POST <br>';
var_dump($_POST);

if (isset($_POST['nama'])){
	echo $_POST['nama'];
}

if (isset($_POST['kota'])){
	echo $_POST['kota'];
}

// kalau GET nama2 variable muncul di url di address bar browser
// http://localhost/latihanphp/proses.php?nama=wisnu&kota=bandung
echo 'GET <br>';
var_dump($_GET);

if (isset($_GET['nama'])){
	echo $_GET['nama'];
}

if (isset($_GET['kota'])){
	echo $_GET['kota'];
}

echo '</pre>';