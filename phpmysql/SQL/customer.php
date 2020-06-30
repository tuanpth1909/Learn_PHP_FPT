<?php
require_once 'login.php'; //truy cap vap database
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die("khong the ket noi CSDL");

$query = "SELECT * FROM customers ";
$result = $conn->query($query);
if(!$result) die("Query Execute Error");
$row = $result->num_rows;


//require_once 'login.php';
//$conn = new mysqli($hn, $un, $pw, $db);
//if ($conn->connect_errno) die("Connect to DATABASE erro");
//
//$query = "SELECT * FROM classics";
//$result = $conn->query($query);
//if (!$result) die("Query Execute Error");
//$row = $result->num_rows;

for($j = 0; $j < $row; ++$j){
    $result->data_seek($j);
    echo 'Name: '.$result->fetch_assoc()['name'].'<br>';
    $result->data_seek($j);
    echo 'Id: '.$result->fetch_assoc()['id'].'<br>';
}
?>