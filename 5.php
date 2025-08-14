<?php
//  if condition الجمل الشرطية 
// الجمل الشرطية if condition - يعني بشوف شرط معين لو اتحقق أعمل حاجة معينة
$number1=10;
$number2=10;
if($number1>$number2){  
    echo "the number1 is bigger and the number2 is smaller ";
     // لو number1 أكبر من number2 - اطبع الجملة دي
}elseif($number1<$number2){
    echo "the number2 is bigger and the number1 is smaller"; 
    // لو number1 أصغر من number2 - اطبع الجملة التانية دي
}

else{
 echo "the number1 and number2 is equal";
 // لو الاتنين زي بعض - اطبع الجملة دي
}
?>
<hr>
<?php
//  if condition الجمل الشرطية 
$number1=20;
$number2=10;
if($number1>$number2){
    echo "the number1 is bigger and the number2 is smaller ";
    echo "<br>";
    if($number1===20){
       
    echo "number is 20";
     // هنا عملنا if جوا if علشان نشوف لو القيمة والنوع لـ number1 هو 20
    }
}elseif($number1<$number2){
    echo "the number2 is bigger and the number1 is smaller";  // لو number1 أصغر من number2
}else{
 echo "the number1 and number2 is equal";  // لو الاتنين متساويين
}
?>