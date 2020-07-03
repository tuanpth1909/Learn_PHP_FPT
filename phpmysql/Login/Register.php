<html>
<body>
<form action="Register.php" method="post">
    <label for="">Username</label><br>
    <input type="text" name="username"><br>
    <label for="">Password</label><br>
    <input type="password" name="password"><br>
    <label for="">Email</label><br>
    <input type="email" name="email"><br>
    <label for="">Phone</label><br>
    <input type="number" name="phone"><br>
    <label for="">Fullname</label><br>
    <input type="text" name="fullname"><br><br>
    <input type="submit" name="submit" value="Đăng kí">
</form>
<?php
include ("login.php");

if (isset($_POST['submit']))
{
    $username = get_post($conn,$_POST['username']);
    $password = get_post($conn,$_POST['password']);
    $email = get_post($conn,$_POST['email']);
    $phone = get_post($conn,$_POST['phone']);
    $fullname = get_post($conn,$_POST['fullname']);
    //Mã hóa password
    $password = md5($password);
    $query = "INSERT INTO login VALUES('$username','$password','$email','$phone','$fullname')";
    $result=$conn->query($query);
    if (!$result) echo "INSERT failed <BR><BR>";
}

//xử lí nhập vào(loại bỏ các kí tự đặc biệt)
function get_post($conn,$var){
    return $conn->real_escape_string($_POST[$var]);
}
?>
</body>
</html>