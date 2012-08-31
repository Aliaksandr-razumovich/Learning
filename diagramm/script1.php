<?php
//функция возвращает процент item от общей суммы
//function GetPercent(){
        global $fruitPercent, $number;
        $file = fopen('data.dat', 'r');
		
		//создаем 2 массива.  первый содержит количество каждого item второй - его имя
        while(!feof($file)){
           $line = fgets($file, 30);
           $array = explode(" ", $line);
           $number .= $array[0]." ";
           $name   .= $array[1]." ";
        }
		//$name = array_splice($name, count($name));
        fclose($file);
		
		//разделяем пробелами значения в массиве
        $number = explode(" ", $number);
        $name   = explode(" ", $name);

        //Вычисляем процент от общей суммы
        $sum = array_sum($number);
		for($i = 0; $i < count($number); $i++){
		    $fruitPercent .= $number[$i] * 100 / $sum." ";
		}

		$fruitPercent = explode(" ", $fruitPercent);

	 

//}      
?>