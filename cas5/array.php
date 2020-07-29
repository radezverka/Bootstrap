<?php

	var_dump($_SERVER);

	echo $_SERVER['HTTP_USER_AGENT'];
	
	// NUMERICKA NIZA
	$brojki = array(1, 2, 3, 9, 99);

	$numbers = [215, 310 , 61, 420];

	$total_numbers = array_merge($brojki, $numbers);

	$vkupno = count($total_numbers);

	echo "Imame Vkupno " . $vkupno . " proizvodi vo nasata baza";

	if (in_array(7, $total_numbers)) {
		echo "Imame sedmica vo vkupniot array";
	}
	else if(in_array(5, $total_numbers)) {
		echo "Imame petka vo vkupniot array";
	}
	else {
		echo "Nemate srekja na komar";
	}

	//ASOCIJATIVNA NIZA
	$names = array("Mitko", "Rade", "Viktor", "Stefani");
	//ASOCIJATIVNA NIZA
	$names = array(
		"Mitko" => "Janeski",
		"Rade" => "Kjosevski",
		"Viktor" => "Janeski",
	);
	
	echo $names["Rade"];

	//MULTIDIMENZONALNA NIZA
	$country = array(
		1 => array("Ohrid", "Ulica", "ZIP CODE", "Naselba"),
		2 => array("Resen", "Market 1", "Prodavnica 2"),
	);
	
	echo $country[2][2];

	//VREDNOSTI VO ARRAY ILI ARRAY KEYS 0,1,2,3,4

	$brojki = array(1, 2, 3, 5, 99);

	echo $brojki[4];

	// var_dump() - ja pecati cela niza so poveke informacii
	// sort() - ja sortira nizata od pomalo kon pogolemo
	// rsort() - ja sortira nizata od pogolemo kon pomalo
	// asort() - ja sortira nizata po vrednostite od pomalo kon pogolemo no im gi cuva klucevite t.e gi premestuva zaedno klucot i vrednosta 
	// arsort() - ja sortira nizata po vrednostito od pogolemo kon pomalo no im gi cuva klucevite t.e gi premestuva zaedno klucot i vrednosta
	// array_merge() - gi spojuva elementite od dve ili povekje nizi kade sto mu gi dodava od ednata na drugata niza
	// array_search() - prebaruvame vrednost vo nizata a dokolku gi pronajdeme ke ni vrati na koj indeks/kluc se naogja vrednosta
	// shuffle() - So ovaa funkcija ja mesame nizata slucajno
	// in_array() - proveruva dali postoi vrednosta koja ja barame
	// count() - ni vrakja broj na elementi vo nizata

?>