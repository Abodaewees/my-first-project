<?php
// Matrix
//$family = array("father","mother","brother");
// ممكن تكتبها بالطريقتين: array() أو []
$family = ["father","mother","brother"]; // دي ليست عادية فيها عناصر بترتيب
echo $family[1]; // بيطبع العنصر رقم 2 (الموقع 1 يعني "mother")
echo"<br>";
$family[1]="love";// هنا أنا غيّرت العنصر اللي في الموقع 1 من "mother" لـ "love"
echo $family[1]; // دلوقتي هيطبع "love"
echo"<br>";
echo count($family);// بيطبع عدد العناصر اللي في الليست = 3
?>
<hr>

<?php
// Assoxiative Array (مصفوفة بتشتغل بنظام الاسم والقيمة)
$market = [ 
    "ahmed"   =>  "milk",
    "mohamed" => "chese",
    "eslam"   =>"meet",
];

echo $market["ahmed"]; // بيطبع الحاجة اللي "ahmed" اشتراها = milk
?>
