<?php
////ket noi co so du lieu
//   require_once 'login.php';
////tao bien truy cap den cac truong trong bang
//   $conn = new mysqli($hn, $un, $pw, $db);
//
//   if($conn->connect_errno) die("Connect to DATABASE erro");
//   //Viet cau lenh truy van muon output
//   $query = "SELECT * FROM teacher";
//   //cho chay cau lenh
//   $result = $conn->query($query);
//   if(!$result) die("khong ket noi duoc");
//   //output dung so cot co trong bang datbase
//   $row = $result->num_rows;
//
//   //Tao vong lap de output het cac gia tri trong bang
//for($i = 0; $i < $row; ++$i){
//    $result->data_seek($i);
//    echo 'Id: '.$result->fetch_assoc()['id'].'<br>';
//    $result->data_seek($i);
//    echo 'Name: '.$result->fetch_assoc()['name'].'<br>';
//    $result->data_seek($i);
//    echo 'Age: '.$result->fetch_assoc()['age'].'<br>';
//    $result->data_seek($i);
//    echo 'Address: '.$result->fetch_assoc()['address'].'<br>';
//    $result->data_seek($i);
//    echo 'Subject: '.$result->fetch_assoc()['subject'].'<br>';
//}
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die("Connect to DATABASE erro");

$query = "SELECT * FROM teacher";
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
    echo 'Subject: '.$result->fetch_assoc()['subject'].'<br><br>';
}
?>