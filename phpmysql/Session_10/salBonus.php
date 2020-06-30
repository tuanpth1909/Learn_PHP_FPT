<?php
$sal = $_GET['sal'];
echo "Salary before bonus :$";
echo $sal;
echo "<br>";
if($sal > 850){
    $bonus = $sal * .1;
    echo "Bonus:  $$bonus";
    echo "<br>";
    $sal = $sal + $bonus;
    echo "Total Salary: $$sal";
}