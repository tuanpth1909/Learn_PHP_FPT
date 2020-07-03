<?php
//dang nhap vao database
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die("Fanal Erorr");

//xoa du lieu
if (isset($_POST['delete']) && isset($_POST['isbn']))
{
    $isbn = get_post($conn,'isbn');
    $query = "DELETE FROM classics WHERE isbn = '$isbn'";
    $result = $conn->query($query);
    if(!$result) echo "DELETE failed <br><br>";
}

//insert du lieu vao trong databsae
if (isset($_POST['author']) && isset($_POST['title']) &&
    isset($_POST['category']) && isset($_POST['year']) &&
    isset($_POST['isbn']))
{
    $author = get_post($conn, 'author');
    $title = get_post($conn, 'title');
    $category = get_post($conn, 'category');
    $year = get_post($conn, 'year');
    $isbn = get_post($conn, 'isbn');
    $query = "INSERT INTO classics VALUES".
        "('$author','$title','$category','$year','$isbn')";
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed <br><br>";
}

//dien thong tin duoc add vao database
echo <<<_END
   <form action='TestConnectData.php' method="post">
   <pre>
   Author <input type="text" name="author">
   Title <input type="text" name="title">
   Category <input type="text" name="category">
   Year <input type="text" name="year">
   ISBN <input type="text" name="isbn">
   <input type="submit" value="ADD RECORD">
</pre>
</form>
_END;

//truy van cau lenh
$query = "SELECT * FROM classics ";
$result=$conn->query($query);
if(!$result) die("Database access failed");
$row = $result->num_rows;

for ($j=0;$j<$row;++$j) {
    $row = $result->fetch_array(MYSQLI_NUM);
//    $r0=$row[0];
//    $r1=$row[1];
//    $r2=$row[2];
//    $r3=$row[3];
//    $r4=$row[4];
    $r0=$row[0];
    $r1=$row[1];
    $r2=$row[2];
    $r3=$row[3];
    $r4=$row[4];
    echo <<<_END

<!--//du lieu duoc hien thi sau khi add-->
    <pre> 
    Author $r0
    Title $r1
    Category $r2
    Year $r3
    ISBN $r4
    </pre>
    <form action="TestConnectData.php" method="post">
    <input type="hidden" name="delete" value="yes">
    <input type="hidden" name="isbn" value="$r4">
    <input type="submit" value="DELETE RECORD">
</form>
_END;
}
$result->close();
$conn->close();
function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);
}
?>

