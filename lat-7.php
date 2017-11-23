<?php

// function 

function nama_fungsi($parameter, $parameter2){
	// isinya
}

function cetak_nama($nama, $kota = 'Bandung')
{
	echo "Nama Saya " . $nama . "<br>";
	echo "Saya tinggal di " . $kota . "<br>";
}

cetak_nama('Wisnu Hafid', 'Lembang');

// function tanpa parameter

function halo(){
	echo 'Halo Halo Bandung';	
}

halo();

// return function

function tahan_hasil()
{
	$string = 'ini contoh teks';
	return $string;
}

$a = tahan_hasil();
echo $a;

// penggunaan global

$text = 'lorem ipsum';

function test()
{
	global $text;
	echo $text;

	// atau
	echo $GLOBALS['text'];
}

test();


echo '<hr>';

// Super Global Variables
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

// var_dump($_SERVER);
