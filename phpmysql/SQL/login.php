<?php
     $hn = "localhost";
     $un = "root";
     $pw = "";
     $db = "login";
     $conn = new mysqli($hn, $un, $pw, $db);
     if($conn->connect_errno)
         die("Fatal Error");
?>
