<?php  

// variable المتغيرات
$title = "Aboda owais" ;
$num = 40;
$float = 3.14;
$bool = true;
$bool2 = false;
$nothing = NULL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> </title>
</head>
<body>
    <?php 
    echo "<h1> $title </h1>" ;
    echo "<div><p>$num</p></div>" ;
    echo "<br> ";
    echo $float;
    echo $bool;
    echo $bool2 ;
    echo $nothing;
    ?>
</body>
</html>