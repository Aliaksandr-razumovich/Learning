<?php
   header('Content-type: image/png');
   include('script1.php');
   
   //300x300
   $im = imagecreate(300, 300);

   //Определяем цвета секторов
   $color[0] = imagecolorallocate($im, 255, 0, 0);
   $color[1] = imagecolorallocate($im, 112, 219, 147); 
   $color[2] = imagecolorallocate($im, 255, 127, 0);
   $color[3] = imagecolorallocate($im, 200, 127, 0);
   $color[4] = imagecolorallocate($im, 221, 127, 0);
   $color[5] = imagecolorallocate($im, 100, 127, 0);
   $black    = imagecolorallocate($im, 0, 0, 0);

   //Определяем цвет фона
   $back_color = imagecolorallocate($im, 255, 250, 240);
   imagefill($im, 1, 1, $back_color);

   //Рисуем сектор
   $startAngle = 0;  
   $coordinate1 = 10;
   $coordinate2 = 15;
   for($k = 0; $k < count($number) - 1; $k++){
       $finishAngle = $finishAngle + $fruitPercent[$k] * 3.6;
       imagefilledarc($im, 150, 150, 100, 100, $startAngle, $finishAngle, $color[$k], IMG_ARC_PIE);
       $startAngle = $finishAngle;
	   $other = 360 - $finishAngle;
	
	   //Выводим легенду
	   imagefilledrectangle($im, 10, $coordinate1 , 15, $coordinate2, $color[$k]);
	   imagestring($im, 1, 30, $coordinate1, $name[$k].' '.round($fruitPercent[$k]).'%', $black);
       $coordinate1 = $coordinate1 + 10;
	   $coordinate2 = $coordinate2 + 10;
   }

   //Выводим изображение
   imagepng($im);
?>