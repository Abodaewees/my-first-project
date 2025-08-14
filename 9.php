<form action="9.php" method="GET">
    <!-- هنا الفورم اللي هتبعت الاسم للملف 9.php عن طريق GET -->
    <label>need of market</label>
    <input type="text" name="name"> <!-- المستخدم هيكتب اسمه هنا -->
    <input type="submit"> <!-- لما يضغط هنا، الاسم هيتبعت -->
</form>

<?php
// هنا بستقبل الاسم اللي اتبعت من الفورم عن طريق URL
$name = $_GET["name"]; // مثال لو كتب ahmed هيبقى $name = "ahmed";

// عملت مصفوفة فيها أسامي ناس وكل واحد ليه طلبين من السوق
$market = [ 
    "ahmed"   => ["milk","oil"] ,
    "mohamed" => ["chese","orange"],
    "eslam"   =>["meet","fish"],
];

// هنا بطبع أول طلب وتاني طلب حسب الاسم اللي اتكتب فوق
echo "order1:". $market[$name][0]; // أول حاجة في طلبات الشخص
echo "<br>";
echo "order2:". $market[$name][1]; // تاني حاجة في طلباته
?>
<form action="9.php" method="GET">
    <!-- هنا الفورم اللي هتبعت الاسم للملف 9.php عن طريق GET -->
    <label>need of market</label>
    <input type="text" name="name"> <!-- المستخدم هيكتب اسمه هنا -->
    <input type="submit"> <!-- لما يضغط هنا، الاسم هيتبعت -->
</form>

<?php
// هنا بستقبل الاسم اللي اتبعت من الفورم عن طريق URL
$name = $_GET["name"]; // مثال لو كتب ahmed هيبقى $name = "ahmed";

// عملت مصفوفة فيها أسامي ناس وكل واحد ليه طلبين من السوق
$market = [ 
    "ahmed"   => ["milk","oil"] ,
    "mohamed" => ["chese","orange"],
    "eslam"   =>["meet","fish"],
];

// هنا بطبع أول طلب وتاني طلب حسب الاسم اللي اتكتب فوق
echo "order1:". $market[$name][0]; // أول حاجة في طلبات الشخص
echo "<br>";
echo "order2:". $market[$name][1]; // تاني حاجة في طلباته
?>
