<?php

// your code goes here

$array1 = array(3,5,4,6,12,4,2,7,3);
$array2 = array(3,1,12,4,2,9,11,2);

$hasilSementara = array();
$index = 1;
$penanda = 2;
2 = 12,4,
for($i = 0; $i < count($array1);) {
	for($j = 0; $j < count($array2); $j++) {
		if($array1[$i] == $array2[$j]) {
			if($index == 0) {
				$hasilSementara[$index] = $array1[$i];
				$index+=1;
				$penanda+=1;
				break;
			} else {
				if($penanda == 0){
					if($array[$i-1] == $hasilSementara[$index]) {
						$hasilSementara[$index] = $array1[$i];
						$penanda+=1;
						$index+=1;
						break;
					} else {
						$index = 0;
						$hasilSementara[$index] = $array1[$i];
						$penanda = 1;
						$index+=1;
						break;
					}
				} else {
					if($array1[$i-1] == $hasilSementara[$index]) {
						$hasilSementara[$index] = $array1[$i];
						$penanda+=1;
						$index+=1;
						break;
					} else {
						$index = 0;
						$hasilSementara[$index] = $array1[$i];
						$penanda = 1;
						$index+=1;
						break;
					}
					
				}
			}
		}
	}
}

print_r($hasilSementara);