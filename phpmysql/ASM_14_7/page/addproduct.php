<?php
require_once '../includes/dbh.inc.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");

//Xử lý xóa:
//if (isset($_POST['delete']) && isset($_POST['idproduct'])){
//    $isbn=get_post($conn,'isbn');
//    $query="DELETE FROM product WHERE idproduct='$idproduct'";
//    $result=$conn->query($query);
//    if (!$result) echo "DELETE failed <BR><BR>";
//}

//hiển thị người dùng
echo <<<_END
<form action="../includes/add-product.inc.php" method="post" enctype="multipart/form-data">
<pre>
      <h2>Add Product</h2>
        <label for="">Title</label><br>
        <input type="text" name="title"><br>
        <label for="">Description</label><br>
        <input type="text" name="description"><br>
        <label for="">Price</label><br>
        <input type="text" name="price"><br>
        <label for="">Image</label><br>
        <input type="file" name="file"><br>
      
    <input type="submit" name="submit" value="Add product">
    </pre>
</form>
_END;

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

//hiển thị kết quả sau khi nhập
    echo <<<_END
<pre>
Image $r0
Title $r1
Description $r2
Price $r3
</pre>
<form action="addproduct.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="idproduct" value="idproduct">
<input type="submit" value="Delete product">
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
