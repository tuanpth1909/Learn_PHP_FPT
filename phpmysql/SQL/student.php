<?php
//require_once 'login.php';
//$conn = new mysqli($hn, $un, $pw, $db);
//if($conn->connect_errno) die("Connect to DATABASE erro");
//
//$query = "SELECT * FROM student";
//$result = $conn->query($query);
//if(!$result) die("Query Execute Error");
//$row = $result->num_rows;
//
//for($j = 0; $j < $row; ++$j){
//    $result->data_seek($j);
//    echo 'Id: '.$result->fetch_assoc()['id'].'<br>';
//    $result->data_seek($j);
//    echo 'Name: '.$result->fetch_assoc()['name'].'<br>';
//    $result->data_seek($j);
//    echo 'Age: '.$result->fetch_assoc()['age'].'<br>';
//    $result->data_seek($j);
//    echo 'Address: '.$result->fetch_assoc()['address'].'<br>';
//    $result->data_seek($j);
//    echo 'Classification: '.$result->fetch_assoc()['classification'].'<br><br>';
//}
//?>

<?php
$hn = "localhost";
$un = "root";
$pw = "";
$db = "login";
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");

//Xử lý xóa:
if (isset($_POST['delete']) && isset($_POST['fullname'])){
    $fullname=get_post($conn,'fullname');
    $query="DELETE FROM register WHERE fullname='$fullname'";
    $result=$conn->query($query);
    if (!$result) echo "DELETE failed <BR><BR>";
}

//Xử lý thêm mới:
if (isset($_POST['username']) && isset($_POST['password']) &&
    isset($_POST['email']) && isset($_POST['phone']) &&
    isset($_POST['fullname']))
{
    $username=get_post($conn,'username');
    $password=get_post($conn,'password');
    $email=get_post($conn,'email');
    $phone=get_post($conn,'phone');
    $fullname=get_post($conn,'fullname');

    $query="INSERT INTO register(username, password, email, phone, fullname) VALUES"."('$username','$password','$email','$phone','$fullname')";
    $result = $conn->query($query);

    if (!$result) echo "INSERT failed<BR><BR>";
}

//hiển thị người dùng

echo <<<_END
<form action="student.php" method="post"><pre>

      Username <input type="text" name="username">
      
       Password <input type="password" name="password">
       
    Email <input type="text" name="email">
    
        Phone <input type="text" name="phone">
        
        Fullname <input type="text" name="fullname">
        
    <input type="submit" value="ADD RECORD">
    </pre>
</form>
_END;

//lấy giữ liệu từ database và hiển thị
$query="SELECT * FROM register";
$result=$conn->query($query);
if (!$result) die("Database access failed");
$rows=$result->num_rows;
for ($j=0;$j<$rows;++$j){
    $row=$result->fetch_array(MYSQLI_NUM);
    $r0=$row[0];
    $r1=$row[1];
    $r2=$row[2];
    $r3=$row[3];
    $r4=$row[4];

//hiển thị kết quả sau khi nhập
    echo <<<_END
<pre>
Username $r0
Password $r1
Email $r2
Phone $r3
Fullname $r4
</pre>
<form action="student.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="fullname" value="$r4">
<input type="submit" value="DELETE RECORD">
</form>
_END;
}
$result->close();
$conn->close();

//xử lí nhập vào(loại bỏ các kí tự đặc biệt)
function get_post($conn,$var){
    return $conn->real_escape_string($_POST[$var]);
}
?>


