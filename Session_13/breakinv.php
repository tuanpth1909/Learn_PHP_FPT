<?php
$number = $_GET['num'];
if($number==0)
{
    exit;
}
$ans = 1/$number;
echo "<BR>Inverse of the entered number is 1/$number";
echo "<BR><BR>Its decimal equivalent is $ans";

echo "<BR><BR><a href=break.html>Go Back</a>";

?>