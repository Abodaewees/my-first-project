<!-- For Loop -->
<?php
$family = ["aboda", "eman", "mohamed"]; // هنا عندي مصفوفة فيها أسماء العيلة

// بستخدم for loop علشان ألف على كل عنصر في المصفوفة
for($i = 0; $i < count($family); $i++){
    // في كل مرة بطبع العنصر الحالي من المصفوفة
    echo "$family[$i] <br>";
    // يعني أول مرة يطبع aboda، بعدين eman، بعدين mohamed
}
?>
<hr>

<!-- For Each -->
<?php
$colors = array("red", "green", "blue", "yellow"); // مصفوفة فيها ألوان

// بستخدم foreach عشان ألف على كل عنصر جوه المصفوفة
foreach ($colors as $x) {
    // $x هنا هو اللون الحالي في كل دورة
    echo "$x <br>";
    // يعني أول مرة red، بعدين green، وهكذا
}
?>
