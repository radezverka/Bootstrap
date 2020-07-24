<?php
// == e edankvo na 5 == 8 Vrakja Nevistina

// != ne e ednakvo na 5!=8 Vrakja Vistina

// > e pogolem od 5>8 Vrakja Nevistina

// < e pomal od 5<8 Vrakja Vistina

// >= e pogolem ili ednakov od 5>=8 Vrakja Nevistina

// <= e pomal ili ednakov od 5<=8 Vrakja Vistina

	$a = "Goce";
	$b = "Rade";

	if ($a == $b) {
//		echo "Rezultatot e tocen";
	}
	else {
//		echo "Rezultatot ne e tocen";
	}

	$a = "Rade e super";
	$b = "Kuvar";

//	echo "Denes e ludnica den,no" . " " . $a . " " . $b;

	$a = 90;
	$b = 33;

	if($a != $b){
//      echo "Rezultatot" . " " . $a . " so rezultatot " . $b . " ne e ednakov";
	}
	else {
//		echo "Rezultatot e ednakov";
	}


	$a = 50;
	$b = 29;

	if ($a > $b){
//		echo $a . " e pogolemo od " . $b;
	}
	else if ($a == $b) {
//		echo $a . " e ednakvo so " . $b;
	}

	else {
//		echo $a . " ne e pogolemo, i ne e ednakvo na " . $b;
	}

	$pari = 20;
	$lokacija = "Plaza";

	if ($pari > 10) {
		if ($pari == 20) {
//			echo "Ke odime na " . $lokacija;
		}
		else if ($pari < 20) {
//			echo "Ke odime vo kazino";
		}
	}
	else {
//		echo "Nemame dovolno pari";
	}

	if (20 >= 19) {
		echo 20 . " e pogolemo ili ednakvo na " . 19;
	}

	if ("Rade" <= 5) {
		echo "Ne e ednakvo";
	}

	


?>