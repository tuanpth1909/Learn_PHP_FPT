<!--Snippet1-->
<?php

$counter=1;

$number=5;

while($counter <= 5)

{
    $result=$number*$counter;
    echo "<br>$result";
    $counter=$counter+1;

}

?>

<!--Snippet2-->
<?php
$number=1;
echo "The odd numbers between 1 and 10 are:";
while($number <= 10)
{
    echo "<br>$number";
    $number=$number+2;
}
?>

<!--Snippet3-->
<?php
$number=1;
echo "The odd numbers between 1 and 10 are:";
do{
    echo "<br>$number";
    $number=$number+2;
}
while($number <= 10);
echo "<br>The loop ends because the condition is satisfied.";
?>

<!--Snippet4-->
<?php

$counter=0;

echo "The even numbers are: <br>";

do {

    echo "$counter<br>";

    $counter=$counter+2;

}

while($counter <= 10);

echo "The loop ends because the condition is satisfied.";
?>

<!--Snippet5-->
<?php
$number=6;
for($counter=1; $counter <= 3; $counter++)
{
    echo "$number<br>";
    $number=$number*2;
}
echo "The loop ends because the condition is satisfied.";
?>

<!--Snippet6-->
<?php
echo "The odd numbers in reverse order are:";
for($i=5;$i>=1;$i--)
{
    $number=$i * 2 - 1;
    echo "<br>$number";
}
echo "<br>The loop ends because the condition is satisfied.";
?>
<!--Snippet7-->
<?php
for($i=1;;$i++) {
    if($i>5)
    {
        break;
    }
    echo "<br>$i";
}
?>

<!--Snippet8-->
<?php

$alphabet='u';

switch($alphabet) {

    case 'a':

        echo "<br>The alphabet is a vowel.";

        break;

    case 'A':
        echo "<br>The alphabet is a vowel.";
        break;

    case 'e':
        echo "<br>The alphabet is a vowel.";
        break;

    case 'E':
        echo "<br>The alphabet is a vowel.";
        break;
    case 'i':
        echo "<br>The alphabet is a vowel.";
        break;

    case '1':
        echo "<br>The alphabet is a vowel.";
        break;

    case '0':
        echo "<br>The alphabet is a vowel.";
        break;

    case '0':
        echo "<br>The alphabet is a vowel.";
        break;

    case 'u':
        echo "<br>The alphabet is a vowel.";
        break;

    case 'U':
        echo "<br>The alphabet is a vowel.";
        break;

    default:
        echo "<br>The alphabet is not a vowel.";
}
?>


<!--Snippet9-->
<?php
$counter = 0;
while($counter<5)
{
    $counter++;
    if($counter==3)
    {
        echo "Continues the loop<br>";
        continue;
    }
    echo "$counter<br>";
}
echo "The loop ends here";
?>

<!--Snippet10-->
<?php

$salary=8000;

if($salary<6000)

{
    echo "Basic : $salary<br>";
    echo "Salary below 6000 is not entitled for HRA.";
    exit;

}
else

{
    echo "Basic : $salary<br>";
    $hra=$salary * 0.8;
    echo "HRA : $hra";

}

?>