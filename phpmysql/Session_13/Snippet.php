<!--Snippet1-->
<?php
$fib1=0;
$fib2=1;
$sum=0;
echo "The Fibonacci series : <BR><BR>";
echo "$fib1<BR>";
while($sum<=15)
{
    echo "$fib2<BR>";
    $sum = $fib1+$fib2;
    $fib1 = $fib2;
    $fib2 = $sum;
}
echo "<BR>";
return 0;
?>

<!--Snippet2-->
<?php
echo "Odd numbers in reverse order:<BR>";
$i=8;
do
{
    $num=$i*2-1;
    echo "<BR>$num";
    $i--;
}while($i>=1);
?>

<!--Snippet3-->
<?php
echo "The square of first ten numbers are :<BR><BR>";
for($i=1;$i<=10;$i++)
{
    $square = $i*$i;
    echo "$square";
    echo "<BR>";
}
?>

<!--Snippet4-->
<HTML>

<BODY>

<FORM METHOD = "GET" ACTION = "breakinv.php">

    Enter number:

    <INPUT TYPE = "TEXT" NAME = "num">

    <BR><BR>

    <INPUT TYPE = "SUBMIT" NAME = "submit" VALUE = "INVERSE">
</FORM>

</BODY>

</HTML>
