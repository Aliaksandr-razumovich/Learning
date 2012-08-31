<?php
//The following code returns percent of each item from their amount
        $file = fopen('data.dat', 'r');
		
       //creating 2 arrays. The first one will contain amount of items. The second one - their names
        while(!feof($file)){
           $line = trim(fgets($file, 30));
           $array = explode(" ", $line);
           $number .= $array[0]." ";
           $name   .= $array[1]." ";
        }
        fclose($file);
	$number = explode(" ", $number);
        $name   = explode(" ", $name);

        //Getting percent of each item
        $sum = array_sum($number);
		for($i = 0; $i < count($number); $i++){
		    $itemPercent .= $number[$i] * 100 / $sum." ";
		}

		$itemPercent = explode(" ", $itemPercent);
?>