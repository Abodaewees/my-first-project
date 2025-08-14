<?php
//calculator   هنا أنا بجمع الرقمين اللي المستخدم هيدخلهم علشان اظبط البوزشن بتاع الناتج تحت بال ريزلت
$number1= $_GET["number1"]; // الرقم الأول جاي من الفورم
$number2=$_GET["number2"];// الرقم التاني جاي من الفورم
$op = $_GET["op"];    // العملية (جمع، طرح...) جايه من الفورم
//ده بيساوي نفس النتيجة بتاعت ال ايف ايمبتي اللي تحتها اللي بتحقق الشرط لو في امر من الاوامر فارغ
//if(!empty($number1) && !empty($number2) && !empty($op))
// هنا بتأكد إن كل المدخلات اتكتبت، لو في حاجة ناقصة بطلع رسالة
if(empty($number1)){// لو الرقم الأول فاضي
  $result = "الرقم الاول فارغ";
}elseif(empty($number2)){// لو الرقم التاني فاضي
  $result = "الرقم الثاني فارغ";
}elseif(empty($op)){// لو العملية فاضية
  $result = "برجاء ادخال العملية ";
}
else{
if($op === "+"){
     $result = $_GET["number1"] + $_GET["number2"];
}elseif($op === "-"){
   $result = $_GET["number1"] - $_GET["number2"];
}elseif($op === "*"){
   $result = $_GET["number1"] * $_GET["number2"];
}elseif($op === "/"){
   $result = $_GET["number1"] / $_GET["number2"];
}
}
?>
<head>
    <!-- ده لينك bootstrap عشان أزبط شكل الفورم والزرار بشكل احترافي -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
  rel="stylesheet" 
  integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
  crossorigin="anonymous"></head><!--بنجيب ده من موقع بوت ستراب علشان نعمل ستايل لل الة حاسبة او للبيدح يعني في العموم-->

<body>
    <div class="container"><!-- دي بتحطلي الفورم في النص وتظبط شكل الصفحة -->
    <!-- ده الفورم اللي المستخدم هيكتب فيه الرقمين -->
    <form action="11 calc.php" method="GET" class="form">
       
      <div>
         <label>Enter Numper</label>
        <input type="number" id="number1" name="number1" class="form-control">
      </div>
       
      <div>
         <label>Enter Numper</label>
        <input type="number" id="number2" name="number2" class="form-control">
       </div>

       <div>
        <label>Enter oprition</label><!-- عنوان خانة العملية -->
        <input type="text" name="op" class="form-control"><!-- خانة العملية (+ أو - أو * أو /) -->
        </div>

        <input type="submit" class="btn btn-primary" > <!-- الزرار اللي هيدوس عليه المستخدم عشان يشوف الناتج -->
        
        <div class="alert alert-success"> <!-- هنا هيتعرض الناتج جوا بوكس لونه أخضر شكله حلو -->
        <?php
          echo $result    // هنا بطبع ناتج الجمعاللي عرفنا فوق بريزلت 
        ?>
        </div>
        
    </form> </body>

