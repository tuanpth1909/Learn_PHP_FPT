<?php
     $hn = "localhost";
     $un = "root";
     $pw = "";
     $db = "login";
?>

<?php
     require_once "login.php";
     $conn = new mysqli($hn, $un, $pw, $db);
     if($conn->connect_errno)
         die("Fatal Error");
     else
         echo "Well Done! Connected to database! <br>";
     ?>
