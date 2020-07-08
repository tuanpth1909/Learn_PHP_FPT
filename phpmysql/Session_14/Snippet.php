<!--Snippet1-->
<?php

echo "Mathematical Functions in PHP";

echo "<br>";

echo "The absolute value cf 100 is: ";

echo abs(lDO);

echo "<br>";

echo "The nearest integer of 99.6 is: ";

echo round(99.6);

echo "<br>";

echo "The largest number from 99.9, 9.9999, and 99.99 is: ";
echo max(99.9,9.9999,99.99);

echo "<br>";

echo "The smallest number from 99.9, 9.9999r and 99.99 is: ";
echo min(99.9,9.9999,99.99);

echo "<br>";

echo "The square root of 256 is: ";

echo sqrt(256);

echo "<br>";

?>

<!--Snippet2-->
<?php

echo "String Functions in PHP";

echo "<br>";
echo "The length of the string HELLO is: ";
echo strlen("HELLO");

echo "<br>";

echo "The comparison of Hello world and Hello Everybody is: ";
echo strcmp("Hello world!","Hello Everybody");
echo "<br>";

echo "The lowercase of the term PHP is: ";
echo strtolower("PHP");

echo "<br>";

echo "The uppercase of the term php is: ";
echo strtoupper("php");

echo "<br>";

echo "The ASCII value of A is: ";

echo bin2hex("A");

echo "<br>";

echo "The reverse of the term ECNALUBMA is: ";
echo strrev("ECNALUBMA");

?>

<!--Snippet3-->
<?php
date_default_timezone_set('Asia/Calcutta');
echo "Today is : " .date("l");
$Today_Date=getdate();
$current_month=$Today_Date['month'];
echo "<br>";

echo "Current month is: ";

echo $current_month;
?>

<!--Snippet4-->
<?php
$num1=0;
if($num1==0)
{
    echo "Dividing by zero";
    trigger_error("Cannot divide by zero", E_USER_ERROR);
}
else
{
    $B=100/$num1;
}
?>

<!--Snippet5-->
<?php
    function square ($x)
{

    return $x*$x;
}
//Snippet6
print "The square of 12 is" .square(12);
?>

<!--Snippet7-->
<?php
//A function to calculate the sum of two variables
function addition()
{
    $A=100;
    $B=200;
    $C=$A+$B;
    echo "The sum of 100 and 200 is: $C";
}
addition();
echo "<br>";
// A function to display the text
function Display()
{
    echo "LEARNING PHP IS FUN";
}
Display();
?>

<!--Snippet8-->
<?php
//Creating a function to calculate the square of a number
function Squaree($A)
    {
//The argument is passed by Value in :he function definition
//using the 8 sign.
//Calculating the square of the number
        $A=$A*$A;
//Displaying the square of the number
        echo $A;
    }
    //Assigning a value to the variable
$A=5;
//Displaying the text
echo "The square of SA is: ";
//Cailing the function
  Squaree($A);
// Creating a function to subtract one variable from another
function subtraction($A,$B)
{

//Calculating the difference

    $C=$A-$B;

//Displaying :he text

    echo "<br>The difference of $A and $B is: $C";

}
//Calling the function and assigning values to the argument
    subtraction(90,45);
    ?>

<!--Snippet9-->
<?php
//Defining a function and passing value to the arguments by reference
function Squares(&$A)
{
//Calculating the square of the number and storing it in a variable
    $A=$A*$A;
//Displaying the resul:
    echo $A;
}
//Assigning value outside the function
$A=5 ;
//Displaying text
echo "The square of $A is: ";
//Executing the function by passing value to argument by reference
Square($A);
//Defining a function and passing value to the arguments by reference
function multiplication(&$A,&$B)
{
//Calculating the multiplication of two numbers and storing it in a
//variable
    $C=$A*$B;
//Displaying text
    echo "<br><br>The multiplication of $A and $B is: $C";
}
//Assigning value outside the function

$A=25;

$B=30;

//Executing the function by passing value to argument by reference
multiplication($A,$E);

?>

<!--Snippet10-->
<?php
function increment(&$num, $increment = 1)
{
$num += $increment;
}
$num = 4;
increment($num);
increment($num, 3);
?>

<!--Snippet11-->
<?php
//Creating a function and assigning default value to the argument
function T_ALLOWAKCE($BASIC_SAL=100000)
{
//Calculating the travel allowance and storing it in a variabLe
    $T_ALLOWANCE=0.25*$BASIC_SAL;
    //Displaying text
echo "The travel allowance is: $T_ALLOWANCE";
}
//Executing the function
T_ALLOWANCE () ;
?>

<!--Snippet12-->
<?php

//Creating a function

function HRA($Basic_Sal)

{
//Calculating the HRA and storing it in a variable
    $HRA=0.25*$Basic_Sal;
//Returning the value stored in the variable
return $HRA;
}

//Storing the output of the function in a variable after setting a

//default value

$E=HRA(20000);

//Displaying the text

echo "The HRA is: ";

//Displaying the output

echo $B;

?>

<!--Snippet13-->
<?php

//Assigning value to variable

$Basic_Sal=75000;

//Creating a function and passing value by reference

function HRAA($Basic_Sal)
{
//Calculating the HRA
    $HRA=3/10 * $Basic_Sal;
//Displaying Text
    echo "Your HRA is: ";
//Displaying the computed HRA
echo $HRA;
echo "<br>";
}

//Creating a function and passing value by reference

function TA($Basic_Sal)
{
//Calculating the TA
    $TA=1/4*$Basic_Sal;
//Displaying Text
    echo "Your TA is: ";
//Displaying the computed TA
    echo $TA;
    echo "<br>";
}
//Creating a function and passing value by reference
function TAX($Basic_Sal)
{
//Calculating the tax
    $TAX=1/10*$Basic_Sal;
//Displaying‘Text
    echo "Your TAX is: ";
//Displaying the computed tax
echo $TAX;
echo "<br>";
}
//Creating a function and passing value by reference
function Net_Salary($Basic_Sal)
{
//Storing tax, ERA and TA in variables
$A=3/10 * $Basic_Sal;
$B=1/4*$Basic_Sal;
$C=1/10 * $Basic_Sal;
//Calculating the Net Salary
$Net_Sal=75000+$A+$B-$C;
//Displaying Text
echo "Your Net Salary is:";
//Displaying the Net Salary
echo $Net_Sal;

}

//Calling the functions

HRAA($Basic_Sal);

echo "<br>";

TAX($Basic_Sal);

echo "<br>";

TAX($Basic_Sal);

echo "<br>";

Net_Salary($Basic_Sal);

echo "<br>";
?>

<!--Snippet14-->
<?php
//Assigning Value to a variable
$A=10;
//Creating a function to calculate the factorial
function factorial($A)
{
//Calculating the factorial
    if($A<=1)
    {
        return 1;
}
    else
    {
        return $A * factorial($A-1);
    }
}
//Displaying Text
echo "The factorial of SA is: ";
//Assigning the result to a variable
$E = factorial($A);
//Displaying the result
echo $B;
?>