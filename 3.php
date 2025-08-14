
<form action="3.php" method="GET"><!-- فورم بيرسل البيانات باستخدام GET -->
Name: <input type="text" name="f_name" ><!-- المستخدم هيكتب اسمه هنا -->
    <input type="submit">
</form>
<?php
echo $_GET["f_name"]// بيطبع قيمة الاسم اللي جت من الفورم الأول
?>
<hr>
<form action="3.php" method="POST"><!-- فورم تاني بيرسل البيانات باستخدام POST -->
    password: <input type="password" name="security" ><!-- المستخدم هيكتب الباسورد -->
    <input type="submit"> <!--ده الزرار اللب بينفذ الاوامر -->
</form>
<?php
echo $_POST["security"] // بيطبع الباسورد اللي جت من الفورم التاني
?>
<hr>
<form action="3.php" method="POST"><!-- هنا فورم بنبين فيه ان الريكويسنت بتمشي مع ال بوست وال جيت -->
Name: <input type="text" name="l_name">   
<br> 
password: <input type="password" name="security" >
    <input type="submit">
</form>
<?php
echo $_REQUEST["l_name"];// بيطبع الاسم اللي جاي سواء بـ POST أو GET
echo"<br>";
echo $_REQUEST["security"];// بيطبع الباسورد اللي جاي سواء بـ POST أو GET
// ملاحظات مهمة:
// $_GET method="GET"بيستخدم مع الفورم اللي فيه 
 //وبيبعَت البيانات في عنوان الرابط.

 // $_POST  method="POST" بيستخدم مع 
//، وبيبعَت البيانات بشكل مخفي.

// $_REQUEST GET , POST بيقدر يقرأ من 
// مع بعض.
 ?>