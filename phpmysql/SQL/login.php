<?php
     $hn = "localhost";
     $un = "root";
     $pw = "";
     $db = "ecommerce";
     $conn = new mysqli($hn, $un, $pw, $db);
     if($conn->connect_errno)
         die("Fatal Error");
?>
