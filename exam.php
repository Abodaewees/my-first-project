<?php
// $numbers = array(1, 2, 3, 4, 5);

// foreach ($numbers as $number) {
//     if ($number % 2 == 0) {
//         echo "$number is even<br>";
//     } else {
//         echo "$number is odd<br>";
//     }
// }
?>
<hr>
<?php
// $students = array(
//     "Ahmed" => 85,
//     "Sara" => 92,
//     "Mohamed" => 78
// );

// foreach ($students as $studentName => $grade ) {
//     echo "Student: $studentName, Grade: $grade<br>";
// }
?>
<hr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}
mysqli_close($conn);
?>