<?php
echo <<<_END
<!--//Form login-->
<h3>LOGIN</h3>
<form action="Login.php" method="post">
<pre>
<label for="">Username</label><br>
<input type="text" name="username">
<label for="">Password</label><br>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="Đăng nhâp"><br><br>
<p><b>Bạn chưa có tài khoản?</b><a href="Register.php">Đăng kí</a></p>
</pre>
</form>
_END;
//Kết nối DATABASE
include ("../SQL/login.php");

//Chuyền dữ liệu vào database và so sánh trả về kết quả
if (isset($_POST['username']) && isset($_POST['password']))
{
    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $query = "SELECT * FROM register WHERE username = '$username' and password='$password'";
    $result = $conn->query($query);
    $row = $result->num_rows;
    if($row!=0)
    {
        echo "Bạn đã đăng nhập thành công!";
    }
    else
    {
        echo "Tài khoản hoặc mật khẩu của bạn không đúng!";
    }
}

//Hàm xử lí kí tự đặc biệt
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>