<?php
//������� ���������� ������� item �� ����� �����
        $file = fopen('data.dat', 'r');
		
		//������� 2 �������.  ������ �������� ���������� ������� item ������ - ��� ���
        while(!feof($file)){
           $line = fgets($file, 30);
           $array = explode(" ", $line);
           $number .= $array[0]." ";
           $name   .= $array[1]." ";
        }
        fclose($file);
		
		//��������� ��������� �������� � �������
        $number = explode(" ", $number);
        $name   = explode(" ", $name);

        //��������� ������� �� ����� �����
        $sum = array_sum($number);
		for($i = 0; $i < count($number); $i++){
		    $itemPercent .= $number[$i] * 100 / $sum." ";
		}

		$itemPercent = explode(" ", $itemPercent);
?>