<?php
 require_once 'login.php';
 $conn = new mysqli($hn, $un, $pw, $db);
 if($conn->connect_errno) die("Connect to DATABASE erro");

 $query = "SELECT * FROM classics";
 $result = $conn->query($query);
 if(!$result) die("Query Execute Error");
 $row = $result->num_rows;

 for($j = 0; $j < $row; ++$j){
     $result->data_seek($j);
     echo 'Author: '.$result->fetch_assoc()['author'].'<br>';
     $result->data_seek($j);
     echo 'Title: '.$result->fetch_assoc()['title'].'<br>';
     $result->data_seek($j);
     echo 'Category: '.$result->fetch_assoc()['category'].'<br>';
     $result->data_seek($j);
     echo 'Year: '.$result->fetch_assoc()['year'].'<br>';
     $result->data_seek($j);
     echo 'ISBN: '.$result->fetch_assoc()['isbn'].'<br><br>';
 }
?>

