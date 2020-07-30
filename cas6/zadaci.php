<?php
	//	1.ZADACA
	for ($i = 2; $i <= 20; $i+=2) {
		echo $i . "<br>";
	}

	//  2.ZADACA
	$i = 1;

	while ($i <= 15) {
		echo $i . "<br>";
		$i+=2;
	}

	// 3.ZADACA
	$a = 1;

	do {
		echo "Hello World" . "<br>";
		$a++;
	}
	while ($a <= 10);

	// 4.ZADACA
	// PROMENLIVATA I E PRAZNA NIZA 
	$brojki = [];

	for ($i = 1; $i <= 10; $i++) {
		$brojki[] = $i;
	}

	var_dump($brojki);

	foreach ($brojki as $value){
		echo $value . "<br>";
	}
	// 5.ZADACA
	$broj = [];
	// SE REDI VNATRE + / =
	for ($i = 2; $i <= 100; $i+=2) {
		$broj[] = $i;
	}

	
	// SE REDI POSLE ZAGRADA 
	foreach ($broj as $values){
		$values = $values * 2;
		echo $values . "<br>";
	}



	
		

?>