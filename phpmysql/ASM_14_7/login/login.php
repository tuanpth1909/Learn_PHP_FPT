<?php
echo <<<_END
  <h2>LOGIN ADMIN</h2>
<form action="login.php" method="post">
<pre>
   <label for="">User Admin</label><br>
   <input type="text" name="username"><br>
   <label for="">Password</label><br>
   <input type="password" name="password"><br>
   <input type="submit" name="login" value="Login">
</pre>
</form>
_END;

//login vao he thong
include ("../../SQL/login.php");

//so sanh ket qua tra ve tu database de login admin
if (isset($_POST['username']) && isset($_POST['password']))
{
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $query = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
    $result = $conn->query($query);
    $row = $result->num_rows;
    if ($row!=0)
    {
        header("Location: ../login/index_admin.php");
    }
    else
    {
        echo "Your account or password is incorrect";
    }
}

//ham xu li ki tu dac biet
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}