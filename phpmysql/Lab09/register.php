<?php
echo <<<_END
   <h2>Register</h2>
<form action="register.php" method="post">
  <pre>
  <label for="">Username</label><br>
  <input type="text" name="username"><br>
    <label for="">Password</label><br>
  <input type="password" name="password"><br>
    <label for="">Fullname</label><br>
  <input type="text" name="fullname"><br>
    <label for="">Email</label><br>
  <input type="email" name="email"><br>
    <label for="">Phone</label><br>
  <input type="text" name="phone"><br>
  <input type="submit" name="subit" value="dang ki">
</pre>
</form>
_END;

//ket noi co so du lieu
include "../SQL/login.php";

//them thong tin vao data
if (isset($_POST['username']) && isset($_POST['password']) &&
    isset($_POST['fullname']) && isset($_POST['email']) &&
    isset($_POST['phone']))
{
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $fullname = get_post($conn, 'fullname');
    $email = get_post($conn, 'email');
    $phone = get_post($conn, 'phone');

    $query = "INSERT INTO dangki(username, password, email, phone, fullname) VALUES"."('$username','$password','$email','$phone','$fullname')";
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed";
}

//ham xu ki ki tu dac biet
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
