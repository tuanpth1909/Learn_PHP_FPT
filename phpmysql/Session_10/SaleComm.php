<?php
$sal=$_GET['sal'];
echo "Total Sales : $";
echo $sal;
echo "<br>";
if ($sal > 50000)
{
    $comm = $sal * .10;
    echo "Commission : $$comm";
    echo "<br>";
}
else if ($sal > 20000 and $sal <= 50000)
{
    $comm = $sal * .07;
    echo "Commission : $$comm";
    echo "<br>";
}
else if ($sal < 20000)
{
    $comm = $sal * .05;
    echo "Commission: $$comm";
    echo "<br>";
}
?>