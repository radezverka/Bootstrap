<?php
	$a = NULL;
	$a = "Rade";
	isset($a);

	if (isset($a)) {
//		echo True;
	}
	else  {
//		echo False;
	}

	$a = true;
	$b = false;

	if ($a == true || $b == true) {
//		echo "Nekoja od promenlivite e true";
	}
	else {
//		echo "Nikoja promenliva ne e true";
	}

	$a = 123;
	$b = 123;
	$c = 2;

	$vkupen_iznos = ($a + $b) / $c;

//	echo $vkupen_iznos;

	$a = 5;
	$b = 2;
	$c = 10;

	if ($a > 4) {
		if ($b + $c == 2) {
			echo "True";
		}
		else if($b + $c == 2) {
			echo "False";
		}
		else {
			echo "Nesto e gresno mozebi";
		}
	}
		


	
	



	


?>