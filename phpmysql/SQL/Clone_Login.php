<?php
  echo <<<_END
   <form action="Clone_Login.php" method="post">
   <pre>
   <label for="">Login</label><br>
   <input type="text" name="username"><br>
   <label for="">Password</label><br>
   <input type="password" name="password"><br>
   <input type="submit" name="submit" value="Dang nhap">
</pre>
</form>
_END;

include ("login.php");
if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');



    $query = "SELECT * FROM register WHERE username='$username' and password='$password'";
    //$result = mysqli_query($conn, $query);
    $result = $conn->query($query);
    $row = $result->num_rows;
    if($row!=0)
    {
        echo "ok!";
    }
    else
    {
        echo "Not ok";
    }
    //$num_rows = mysqli_num_rows($result);

}
//require_once "get_post.php";
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>
