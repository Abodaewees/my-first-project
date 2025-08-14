<?php
// strings النصوص
$string = "Aboda Owais";
echo $string ; // بتطبع النص كامل
echo "<br>"; //علشان نعمل سطر جديد 
echo strtolower($string);// بتحول كل الحروف لحروف صغيرة => aboda owais
echo "<br>";
echo strtoupper($string);// بتحول كل الحروف لكبيرة => ABODA OWAIS
echo "<br>";
echo strlen($string);// بتجيب طول النص (عدد الحروف) => 12
echo "<br>";
echo $string[1];// بتطبع الحرف رقم 1 (من الشمال والصفر أول واحد) => b
echo "<br>";
echo $string[0] = "n";// بتغير أول حرف في النص لـ "n" بدل "A"
echo "<br>";
echo str_replace("Aboda","maged",$string); // بتستبدل كلمة "Aboda" بـ "maged" في النص
echo "<br>";
echo substr($string, 4 );// substr: بتقطع النص من الحرف رقم 4 لحد الآخر => "da Owais"
echo "<br>";


?>