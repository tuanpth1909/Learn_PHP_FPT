<?php
$units = $_GET['units'];
echo "Number of Units Consumed : ";
echo $units;
echo "<br>";
if ($units > 1000)
{
    $rate = $units * 3;
    $service = $rate * .1;
    echo "Service Charge added for Units above 1000 : $$service";
    echo "<br>";
    $totalbill = $rate + $service;
    echo "Total Electricity Bill : $$totalbill";
}
else
{
    if ($units > 500 and $units <= 1000)
    {
        $rate = $units * 2;
        echo "Total Electricity Bill : $$rate";
    }
    else
    {
        $rate = $units * 1.5;
        echo "Total Electricity Bill : $$rate";
    }
}
?>