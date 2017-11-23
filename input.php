<?php

function insert_database($nama, $kota)
{
	echo 'nama = ' . $nama . '<br>';
	echo 'kota = ' . $kota . '<br>';
	echo 'sudah diinput';
}

if (isset($_POST['proses']))
{
	$nama = strip_tags($_POST['nama']); // hanya menghilangkan tag html
	$kota = filter_var($_POST['kota'], FILTER_SANITIZE_STRING); // selain tag html, kutip & karakter lain juga difilter

	insert_database($nama, $kota);
} else {
	echo 'bukan dari form';
}
