<?php
//������� ���������� ������� item �� ����� �����
//function GetPercent(){
        global $fruitPercent, $number;
        $file = fopen('data.dat', 'r');
		
		//������� 2 �������.  ������ �������� ���������� ������� item ������ - ��� ���
        while(!feof($file)){
           $line = fgets($file, 30);
           $array = explode(" ", $line);
           $number .= $array[0]." ";
           $name   .= $array[1]." ";
        }
		//$name = array_splice($name, count($name));
        fclose($file);
		
		//��������� ��������� �������� � �������
        $number = explode(" ", $number);
        $name   = explode(" ", $name);

        //��������� ������� �� ����� �����
        $sum = array_sum($number);
		for($i = 0; $i < count($number); $i++){
		    $fruitPercent .= $number[$i] * 100 / $sum." ";
		}

		$fruitPercent = explode(" ", $fruitPercent);

	 

//}      
?>