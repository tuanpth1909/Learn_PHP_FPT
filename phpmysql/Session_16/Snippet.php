<!--Snippet1-->
<?php

// Creating an array and staring values

$department = array (1 => 'Accounts', 2 => 'Economics', 3 =>
    'Computers', 4 => 'Marketing');

// Displaying the element of the array

echo $department [1];

?>

<!--Snippet2-->
<?php

$associate = array("a" => 'Finance', "b" => 'Sales', "c" => 'HR',
"d" => 'Purchase');

echo "The value of the associative array is: ";

echo $associate["c"];

?>

<!--Snippet3-->
<?php
$department[0]= "Finance";
$department[1]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
$reo = each($department);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
?>

<!--Snippet4-->
<?php
$ITdept = array(0 => "Testing", 1 => "Training");
$Salesdept = array(0 => "Advertising", 1 => "Marketing");
$no_of_element = count($ITdept);
for ($i=0; $i< Sno_of_element; $i++)
{
$rec = each($ITdept);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
echo "<br>";
$num_of_element = count($Salesdept);
for ($i=0; $i< $num_of_element; $i++)
{
    $rec = each($Salesdept);
    echo "$rec[key] $rec[value] ";
    echo "<br>";
}
echo "<br>";
$AdminDept = array_merge($ITdept, $Salesdept);
$numl_of_element = count($AdminDept);
for ($i=0; $i< Snum1_of_element; $i++)
{
    $rec = each($AdminDept);
    echo "$rec[key] $rec[value] ";
    echo "<br>";
}
echo "<br>";
$AdminDept = array_merge($Salesdept, $ITdept);
$num2_of_element = count($AdminDept);
for ($i=0; $i< $num2_of_element; $i++)
{
    $rec = each($AdminDept);
    echo "$rec[key] $rec[value] ";
echo "<br>";
}
echo "<br>";
?>

<!--Snippet6-->
<?php
$country_mdlist = array(
"USA" => array(
    "Capital" => "Washington D.C.",
    "Currency" => "US Dollar"),
"England" => array(
    "Capital" => "London",
    "Currency" => "Pound Sterling"),
"Australia" => array(
    "Capital" => "Canberra",
"Currency" => "Australian Dollar"),
"New Zealand" => array(
        "Capital" => "Wellington",
        "Currency" => "NZ Dollar"));
echo $country_mdlist["Australia"]["Currency"];
?>

<!--Snippet7-->
<?php
$employee_det = array(
"Employee 1" => array(

1 => "$100",

2 => "$150",

3 => "$100",

4 => "$160",

5 => "$250",

6 => "$148"),

"Employee 2" => array(

1 => "$180",

2 => "$195",

3 => "$200",

4 => "$130",

5 => "$280",

6 => "$218"));
echo "The commission is: ";
echo $employee_det["Employee 2"][5];
?>

<!--Snippet8-->
<?php
$department[0]= "Finance";
$department[l]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
sort($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
    $rec = each($department);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
?>

<!--Snippet 8-->
<?php
$department[0]= "Finance";
$department[l]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
rsort($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
    $rec = each($department);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
?>

<!--Snippet9-->
<?php

$department[0]= "Finance";
$department[l]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
arsort($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++) {
    $rec = each($department);
    echo "$rec[key] $rec[value] ";
    echo "<br>";
}
?>

<!--Snippet10-->
<?php
$department[0]= "Finance";
$department[1]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
$dept = array_flip($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
$rec = each($dept);
echo "$rec[key] $rec:value: ";
echo "<br>";
}
?>

<!--Snippet11-->
<?php
$department[0] = "Finance";
$department[1] = "Sales";
$department[2]= "HR";
$department[3] = "Purchase";
$dept = array_reverse($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
$rec = each($dept);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
?>

<!--Snippet12-->
<?php
$department[0]= "Finance";
$department[1]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
$dept = array_keys($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{

$rec = each($dept);

echo "$rec[value] ";

echo "<br>";
}
?>

<!--Snippet13-->
<?php
$department[0]= "Finance";
$department[1]= "Sales";
$department[2] = "HR";
$department[3] = "Purchase";
array_pop($department);
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
$rec = each($department);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
?>

<!--Snippet14-->
<?php
$department[0]= "Finance";
$department[1]= "Sales";
$department[2]= "HR";
$department[3]= "Purchase";
array_push($department, "Marketing");
$no_of_element = count($department);
for ($i=0; $i< $no_of_element; $i++)
{
$rec = each($department);
echo "$rec[key] $rec[value] ";
echo "<br>";
}
?>