<?php
// constant di PHP

$angka = 100;
$angka = $angka*2;

define('NAMA_CONSTANT', $angka);
define('HURUF_BESAR', 'ini nilai untuk HURUF BESAR', true); // incase sensitive, kalau true bisa huruf besar atau kecil, defaultnya false

define('__DIR__', 'halo'); // predefined constant tidak bisa di set seperti ini

echo NAMA_CONSTANT . '<br>';
echo __DIR__ . '<br>'; // predefined constant
echo huruf_besar;

