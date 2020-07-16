<?php
require_once "includes/dbh.inc.php";
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("Fanal Erorr");

//Form dang ki
echo <<<_END
<h2>Login</h2>
  <form action="Register.php" method="post">
  <pre>
  <label for="">Full name</label><br>
  <input type="text" name="fullname"><br>
  <label for="">Email</label><br>
  <input type="text" name="email"><br>
  <label for="">Username</label><br>
  <input type="text" name="username"><br>
    <label for="">Password</label><br>
  <input type="password" name="password"><br>
    
  <input type="submit" name="submit" value="Đăng kí">
</pre>
</form>
_END;

//Thêm dữ liệu vào tài khoản Database
if (isset($_POST['fullname']) && isset($_POST['email']) &&
    isset($_POST['username']) && isset($_POST['password']))
{
    $fullname = get_post($conn, 'fullname');
    $email = get_post($conn, 'email');
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $password = md5($password);

    $query = "INSERT INTO register(fullname, email, username, password) VALUES"."('$fullname', '$email','$username','$password')";
    $result = $conn->query($query);
    if (!$result)
    {
        echo "INSERT failed";
    }else
        {
        setcookie('username', $username,time() + 3600 );
        setcookie('fullname', $fullname,time() + 3600 );
        header('Location: index.php');
    }

}

    //Xử lí kí tự đặc biệt
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>