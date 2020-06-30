<!--Snippet1-->
<html>
<body>
<?php
$a = 60;
$b = 60;
$c = 60;
if($a+$b+$c == 180)
    echo "The triangle is valid";
?>
</body>
</html>

<!--Snippet2-->
<html>
<body>
<form action="salBonus.php" method="get">
    <table>
        <tr>
            <td>Salary &nbsp;</td>
            <td><input type="text" name="sal"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>

<!--Snippet4-->
<?php
$sales = 2750;
if($sales > 2000)
{
    $comm = $sales * .1;
    echo "Sales: $$sales <br> Commission : $$comm";
}
else
{
    $comm = $sales * .05;
    echo "Sales: $$sales <br> Commission : $$comm";
}
?>

<!--Snippet5-->
<html>

<body>

<form action="SaleComm.php" method="GET">
    <table>

        <tr>

            <td>Total Sales : </td>

            <td><input type="text" name="sal"></td>
        </tr>

    </table>

    <br>

    <input type="submit" value="Submit">
</form>

</body>

</html>

<!--Snippet7-->
<html>

<body>

<form action="elecBill.php" method="GET">
    <table>

        <tr>

            <td>Electricity Units Consumed : </td>
            <td><input type="text" name="units"></td>
        </tr>

    </table>

    <br>

    <input type="submit" value="Submit">
</form>

</body>

</html>

<!--Snippet9-->
<?php

$day = 1;

switch ($day)

{
    case 1:
        echo "It is Sunday";
        echo "<br>";
    case 2:
        echo "It is Monday";
        echo "<br>";
    case 3:
        echo "It is Tuesday";
        echo "<br>";
    case 4:
        echo "It is Wednesday";
        echo "<br>";
    case 5:
        echo "It is Thursday";
        echo "<br>";
    case 6:
        echo "It is Friday";
        echo "<br>";
    case 7:
        echo "It is Saturday";
        echo "<br>";
    default:
        echo "There are Seven Days in a Week";
        echo "<br>";

}

?>

<!--Snippet10-->
<?php
$day = 1;
switch ($day)
{
    case 1:
        echo "It is Sunday";
        echo "<br>";
        break;
    case 2:
        echo "It is Monday";
        echo "<br>";
        break;
    case 3:
        echo "It is Tuesday";
        echo "<br>";
        break;
    case 4:
        echo "It is Wednesday";
        echo "<br>";
        break;
    case 5:
        echo "It is Thursday";
        echo "<br>";
        break;
    case 6:
        echo "It is Friday";
        echo "<br>";
        break;

    case 7:

        echo "It is Saturday";

        echo "<br>";

        break;

    default:

        echo "There are Seven Days in a Week";
        echo "<br>";
        break;
}
?>

<!--Snippet11-->
<?php

$x = 100;

$y = 50;

$disp = ($x > $y) ? "X is greater than Y" : "Y is greater than X";
echo $disp;

?>