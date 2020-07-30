<?php
	// CIKLUS
	$i = 1;

	for($i = 1; $i < 5; $i++) {
		echo "Momentalniot broj e " . $i . "<br>";
	}

	$i = 1;
	// WHILE PROVERUVA DALI REZULTATOT E TOCEN PA PRODOLZUVA SO IZVRSUVAJNE NA FUNKCIJA
	while ($i < 10) {
		echo $i . "<br>";
		$i++;
	}

	$i = 5;
	// DO PRVO JA IZVRSUVA FUNKCIJATA POTOA PROVERUVA DALI DA PRODOLZI SO REZULTATOT
	do {
		echo $i . "<br>";
		$i++;
	}
	while ($i < 15);

	$brojki = [1, 2, 3, 4, 5];
	foreach ($brojki as $value){
		echo $value . "<br>";
	}

	for ($i = 3;$i <= 10; $i++) {
		echo "Brojot odi nagore";
		if ($i == 5) break;
	}

	
?>