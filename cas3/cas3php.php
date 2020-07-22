<?php
	// 1. KOMENTIRANJE

	// Komentar 1 - PHP 
	
	# Komentar 2 - C#,C++
	
	/* 	Komentar 3	-	CSS	*/

	// 2. PRISTAP DO XAMPP / SERVER
	// 127.0.0.1/foldername/ ili localhost/foldername/ vo XAMPP --> HTDOCS

	// Variabla e promenliva i moze da se promeni 
	$varname = "Rade";
	$varlastname = "Kjosevski";

	// define e konstanta i nemoze da se promeni
	define("WEBSITE_NAME", "Facebook");

	define("EMAIL", "radekosevski@hotmail.com");

	define("TELEFON", "077846253");
	// print = echo
	echo WEBSITE_NAME;

	// $age = Deklarirajne

	//	$age = 15; Inicializirajne

	// VAZNI FUNKCII

	isset($varname); // Proveruva dali promenlivata e setirana ili NULL

	empty($varname); // Proveruva dali promenlivata e prazna, ako e prazna vrakja TRUE ako ne e vrakja FALSE

	unset($varname); // Ja unistuva promenlivata od memorija

	is_null($varname); // Vrakja TRUE dokolku promenlivata e NULL a false dokolku ne

	strlen($varname); // Vrakja dolzina na string dokolku ima vrednost vo promenlivata

	strpos(a,$varname); // Vrakja indeks na pozicija kade sto se naogja karakterot koj go barame



	// Celosni informacii za PHP verzija 

	//phpinfo();
?>