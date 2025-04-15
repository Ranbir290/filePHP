<?php

        $marks = array( 
            "Ranbir" => array(
                "physics" => 35,
                "maths" => 30,	
                "chemistry" => 39
                ),
            
            "Manan" => array(
                "physics" => 30,
                "maths" => 32,
                "chemistry" => 29
                ),
            
            "akash" => array(
                "physics" => 31,
                "maths" => 22,
                "chemistry" => 39
                )
            );
         
         echo "Marks for Ranbir in physics : " ;
         echo $marks['Ranbir']['physics'] . "<br>"; 
         
         echo "Marks for Manan in maths : ";
         echo $marks['Manan']['maths'] . "<br>"; 
         
         echo "Marks for akash in chemistry : " ;
         echo $marks['akash']['chemistry'] . "<br>";
	 echo"Code Executed by Ranbir Sood 135!"; 
         
?>
