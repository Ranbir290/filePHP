<?php
	echo "<h1>Associative Array</h1>";
	
	$student = array("Ranbir"=>1500, "Manan"=>2000, "Akash"=>2500);
	
	echo "Pocket Money of Ranbir is: ". $student['Ranbir']. "<br>";
	echo "Pocket Money of Manan is: ". $student['Manan']. "<br>";
	echo "Pocket Money of Akash is: ". $student['Akash']. "<br><br>";

	$student['Ranbir'] = "High";
	$student['Manan'] = "Medium";
	$student['Akash'] = "Low";
	
	echo "Pocket Money of Ranbir is: ". $student['Ranbir']. "<br>";
	echo "Pocket Money of Manan is: ". $student['Manan']. "<br>";
	echo "Pocket Money of Akash is: ". $student['Akash']. "<br><br>";

	echo "made by Ranbir sood 135";
?>