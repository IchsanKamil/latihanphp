<?php

// Conditional Statements 

/*

if ( kondisi ){
	// kalau memenuhi kondisi
} else {
	// kalau tidak memenuhi kondisi
}

if ( kondisi 1){
	// kalau memenuhi kondisi 1
} else if (kondisi ke 2){
	// kalau memenuhi kondisi 2
} else {
	// kalau tidak memenuhi kondisi 1 & 2
}

*/

$a = 12;

if ($a != 10){
	echo '$a bukan 10';
} else {
	echo '$a nilainya 10';
}

echo '<br>';

$b = 1;

if ( ($b == 1) || ($b == 2) ) // or atau || (pipeline)
{
	echo '$b nilai nya 1 atau 2';
}
else if ($b < -1)
{
	echo '$b nilainya negatif';
}
else if ( ($b > 0) && ($b < 10 ) ) // and atau &&
{
	echo '$b kurang dari 10 dan lebih dari 0';
}
else
{
	echo '$b lebih dari 10';
}

echo '<br>';

$x = 3;

switch ($x) {
	default:
		echo '$x nilainya adalah = ' . $x;
		break;

	case '10':
		echo '$x nilainya 10';
		break;

	case 1:
	case 2:
	case 3:
		echo '$x itu nilainya antara 1,2,3';
		break;

	case ($b > 0) && ($b < 10 ):
		echo 'nilai $x adalah ' . $x . ', karena kurang dari 10 dan lebih dari 0';	
		break;
}