<HTML>

<BODY>

(FORM METHOD = "GET" ACTION = "squareroct.php">

Enter a Number:

<INPUT TYPE = "TEXT" NAME = ”n1text">

<BR>

<BR>

<INPUT TYPE=”SUEMIT" NAME = ”SQUARE ROOT" VALUE = "SQUARE ROOT">
<?php

$A=$_GET['n1text'];

echo "The square root of $A is ";

echo sqrt($A);

echo "<BR><BH><a href=squareroot.html>Go Back</a>";
?>
<?php

$str = "A";

$asciival = ord($str);

echo "The ASCII equivalent of A is Sasciival.";
?>
<?php

$B = time();
echo $B;

?>
<?php
function remainder()
{
    $A=59;
$B=6;
$C=$A%$B;
echo $C;
}
echo "The remainder is ";
remainder();
?>
</BODY>

</HTML>