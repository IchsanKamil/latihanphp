<?php

// multidimensional array

$array1 = array(1,2,3,4,5);
$array2 = array(6,7,8,9,10);

$array_multi = array(
	'array1' => $array1,
	'array2' => $array2,
);

$array_multi2 = array(
	'array1' => array(1,2,3,4,5),
	'array2' => array(6,7,8,9,10)
);

$array_multi3 = [
	'array1' => [
		'array2' => [
			'array3' => 'tes',
			'array4' => [
				'tiga', 'empat'
			]
		],
		'index2' => 'dua'
	],
	'index' => 'satu'
];

echo '<pre>';
print_r($array_multi3);

// echo $array_multi3['array1']['array2']['array4'][0];


foreach ($array_multi3 as $key1 => $value1)
{
	if (is_array($value1))
	{
		echo $key1 ."\n";

		foreach ($value1 as $key2 => $value2)
		{
			if (is_array($value2))
			{
				echo $key2 ."\n";
				
				foreach ($value2 as $key3 => $value3) 
				{
					if (is_array($value3))
					{
						echo $key3 ."\n";
					}
				}
			}
		}
	}
}

echo '</pre>';