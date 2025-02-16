<?php
	class greeting
	{
		public $str = "Hello ";

		function show_greeting()
        	{
            		return $this->str;
        	}	
	}

	$message = new greeting;
    	var_dump($message);
	echo "<br><br>". $message->show_greeting(). "Ranbir sood<br>";
	echo "<br>made by Ranbir sood 135";
?>