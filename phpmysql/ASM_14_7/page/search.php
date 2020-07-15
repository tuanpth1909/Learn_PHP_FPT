<?php
require_once "../includes/dbh.inc.php";
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error)die("Fatal Error");

// form tim kiem product
echo <<<_END
   <form action="search.php" method="post">
   <pre>
   <input type="text" name="search">
   <input type="submit" name="submit" value="Search">
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

//Tim product
$query = "SELECT FROM product WHERE column LIKE ''";