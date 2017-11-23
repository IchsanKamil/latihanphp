<?php

// Looping (pengulangan)

$array = array('satu', 'dua', 'tiga', 1, 2, 3, 0.3, 10.4567, "baru", "lagi");
echo '<pre>';
var_dump($array);
print_r($array);
echo '</pre>';
echo $array[0];

$array_index = array(
	'nama' => 'wisnu hafid',
	'alamat' => 'margahayu',
);
print_r($array_index);

echo '<br>';

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