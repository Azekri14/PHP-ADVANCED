<?php

function rekenUit($getal1, $getal2, $getal3) {

	$resultaat = $getal1 + $getal2 + $getal3;
  
	return $resultaat;

}

echo "Als ik de getallen 5, 2 en 19 bij elkaar optel, is de uitkomst ".rekenUit(5, 2, 19) . '<br>';
echo "Als ik de getallen 23, 88 en 26 bij elkaar optel, is de uitkomst ".rekenUit(23, 88, 26) . '<br>';
echo "Als ik de getallen 120, 98 en 340 bij elkaar optel, is de uitkomst ".rekenUit(120, 98, 340);

?>