<?php
 echo <<<_END
<h2>Login</h2>
  <form action="Register.php" method="post">
  <pre>
  <label for="">Username</label><br>
  <input type="text" name="username"><br>
    <label for="">Password</label><br>
  <input type="password" name="password"><br>
    <label for="">Email</label><br>
  <input type="text" name="email"><br>
    <label for="">Phone</label><br>
  <input type="text" name="phone"><br>
    <label for="">Full name</label><br>
  <input type="text" name="fullname"><br>
  <input type="submit" name="submit" value="Đăng kí">
</pre>
</form>
_END;

 //Kết nối Database
include ("../SQL/login.php");
//include ("../SQL/get_post.php");

//Thêm dữ liệu vào tài khoản Database
if (isset($_POST['username']) && isset($_POST['password']) &&
    isset($_POST['email']) && isset($_POST['phone']) &&
    isset($_POST['fullname']))
{
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $email = get_post($conn, 'email');
    $phone = get_post($conn, 'phone');
    $fullname = get_post($conn, 'fullname');

    $query = "INSERT INTO register(username, password, email, phone, fullname) VALUES"."('$username','$password','$email','$phone','$fullname')";
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed";
}

//Xử lí kí tự đặc biệt
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>