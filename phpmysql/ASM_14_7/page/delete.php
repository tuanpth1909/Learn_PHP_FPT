<?php
require_once '../includes/dbh.inc.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");

//lấy giữ liệu từ database và hiển thị
$query="SELECT * FROM product";
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
Id Product $r0
Image $r1
Title $r2
Description $r3
Price $r4
</pre>
<form action="addproduct.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="idproduct" value="$r0">
<input type="submit" value="Delete product">
</form>
_END;
}

//Xử lý xóa:
if (isset($_POST['delete']) && isset($_POST['title'])){
    $isbn=get_post($conn,'isbn');
    $query="DELETE FROM product WHERE title ='$title'";
    $result=$conn->query($query);
    if (!$result) echo "DELETE failed <BR><BR>";
}
?>