<?php

// Looping (pengulangan)

$array = array(
	0 => 'satu',
	1 => 'dua',
	2 => 'tiga'
);

$array = array('satu','dua', 'tiga', 1, 2, 3, 0.3, 10.4567, "baru", "lagi");

$array_index = array(
	'nama' => 'wisnu hafid',
	'alamat' => 'margahayu',
);

// penulisan lain array
$array_index2 = [
	'nama' => 'wisnu hafid',
	'alamat' => 'margahayu',
];

extract($array_index); // mengubah index array jadi variable
echo $alamat;

echo '<pre>';
var_dump($array);

print_r($array);
print_r($array_index);

sort($array, SORT_NUMERIC ); // http://php.net/manual/en/function.sort.php
asort($array); // di urutkan, tapi indexnya tetap (maintain index)

$baru = array_reverse($array); // membalikan nilai array
print_r($baru);

echo '</pre>';

echo $array[0];
echo '<br>';
echo $array_index['nama'];

echo '<hr>';

$jumlah = count($array); // untuk hitung jumlah array

// loop cara 1 dengan for
for ($i=0; $i < $jumlah; $i++) { 
	// echo $i . "\n";
	echo 'nilai $i = '. $i . '<br>$array['.$i.'] = ' . $array[$i] . "<br><br>";
}
?>
<table border="1" cellpadding="5">
	<tr>
		<th>Nama</th>
		<th>Nilai</th>
	</tr>

	<?php for ($a=0; $a < $jumlah; $a++) { ?>

	<tr>
		<td><?php echo '$array['.$a.']'; ?></td>
		<td><?php echo $array[$a]; ?></td>
	</tr>
	
	<?php } ?>

</table>

<?php

// loop cara 2 dengan foreach
// foreach biasanya digunakan untuk array dengan index yg bukan angka

echo '<hr>';

foreach ($array as $data) {
	echo $data . '<br>';
}

echo '<hr>';

foreach ($array as $index => $value) {
	echo $value . '<br>';
}

echo '<hr>';

?>

<table border="1" cellpadding="5">
	<tr>
		<th>Index Array</th>
		<th>Nilai</th>
	</tr>

	<?php foreach ($array_index as $key => $nilai) { ?>

	<tr>
		<td><?php echo $key; ?></td>
		<td><?php echo $nilai; ?></td>
	</tr>
	
	<?php } ?>

</table>

<?php

echo '<hr>';

// loop cara 3 dengan while
$x = 0;
while ($x < 10) {
	echo $array[$x] . '<br>';
	$x++; // penulisan singkat dari $x = $x+1;
}
