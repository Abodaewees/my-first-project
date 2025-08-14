<?php
// هنا ببدأ أول فانكشن اسمها hello بتاخد باراميتر اسمه ($x)
function hello($x){
    $user = $x; // خزنت القيمة اللي جاتلي في متغير تاني اسمه $user
    // لو المستخدم كتب "Nour" بالظبط، بالحروف والكابيتال
    if($user === "Nour"){
        echo "hello" . $user; // اطبع helloNour
    } else {
        echo "bye" . $user; // لو مش Nour، اطبع bye + الاسم
    }
}
// هنا بنادي على الفانكشن وبديله القيمة 'Nour'
hello('Nour'); // ده هيدخل على if ويطبع helloNour
?>
<hr>
<?php
// هنا فانكشن اسمها add بتاخد رقمين وتجمعهم
function add($x, $y){
    return $x + $y; // بترجع ناتج الجمع
}
// كل سطر من دول بينادي على الفانكشن add وبيطبع الناتج
echo add(15, 20); // هيطبع 35
echo "<br>";
echo add(10, 22); // هيطبع 32
echo "<br>";
echo add(14, 21); // هيطبع 35

?>
