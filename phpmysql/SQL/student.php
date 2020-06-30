<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die("Connect to DATABASE erro");

$query = "SELECT * FROM student";
$result = $conn->query($query);
if(!$result) die("Query Execute Error");
$row = $result->num_rows;

for($j = 0; $j < $row; ++$j){
    $result->data_seek($j);
    echo 'Id: '.$result->fetch_assoc()['id'].'<br>';
    $result->data_seek($j);
    echo 'Name: '.$result->fetch_assoc()['name'].'<br>';
    $result->data_seek($j);
    echo 'Age: '.$result->fetch_assoc()['age'].'<br>';
    $result->data_seek($j);
    echo 'Address: '.$result->fetch_assoc()['address'].'<br>';
    $result->data_seek($j);
    echo 'Classification: '.$result->fetch_assoc()['classification'].'<br><br>';
}
?>

