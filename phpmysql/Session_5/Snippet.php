<?php
$a = "hello\n";
$b = "hello\n";
echo $a;
echo "<br>";
echo $b;
?>

<?php
$Salary = 5000;
echo $Salary;
?>

<?php
$message = "HELLO! How are you";
echo $message;
?>

<?php
$number1 = 1019;
$number2 = 126;
$number3 = $number1 + $number2;
echo $number3;
?>

<?php
$Fname = "John";
$Lname = "Smith";
$name =& $Fname;
echo "<br>";
echo $Lname;
echo "<br>";
?>

<?php
error_reporting(-1);
define("Name", "Tuan Pham");
echo Name;
echo "<br>";
echo name;
echo "<br>";
?>
