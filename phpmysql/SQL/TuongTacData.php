<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

//Xoa du lieu bang ghi
if(isset($_POST['delete']) && isset($_POST['isbn']))
{
    $isbn =get_post($conn, 'isbn');
    $query = "DELATE FROM classics WHERE ibsn = '$isbn'";
    $result = $conn->query($query);
    if (!$result) echo "DELETE failed<br><br>";
}

//insert du lieu
if (isset($_POST['author']) && isset($_POST['title']) &&
    isset($_POST['category']) && isset($_POST['year']) &&
    isset($_POST['isbn']))
{
    $author = get_post($conn,'author');
    $title = get_post($conn,'title');
    $category = get_post($conn,'category');
    $year = get_post($conn,'year');
    $isbn = get_post($conn,'isbn');
    $query = "INSERT INTO classics VALUES ".
        "('$author','$title','$category','$year','$isbn')";
    $result = $conn->query($query);
    if (!$result) echo "INSERT failed<br><br>";

}

//form nhap du lieu
echo <<<_END
  <form action="TuongTacData.php" method="post">
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

//truy van du lieu
//$query = "SELECT * FROM classics";
//$result = $conn->query($query);
//if(!$result)echo "Database access failed";
//$row = $result->num_rows;
//for ($j = 0; $j < $row; ++$j)
//{
//    $row = $result->fetch_array(MYSQLI_NUM);
//    $r0 = $row[0];
//    $r1 = $row[1];
//    $r2 = $row[2];
//    $r3 = $row[3];
//    $r4 = $row[4];
//
////hien thi ket qua
//echo <<<_END
//<pre>
// Author  $r0
// Title $r1
// Category $r2
// Year $r3
// ISBN $r4
//</pre>
//<form action="TuongTacData.php" method="post">
//  <input type="hidden" name="delete" value="yes">
//  <input type="hidden" name="ibsn" value="$r4">
//  <input type="submit" value="DELETE RECORD">
//</form>
//_END;
//}
$query="SELECT * FROM classics";
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


    echo <<<_END
<pre>
Author $r0
Title $r1
Category $r2
Year $r3
ISBN $r4
</pre>
<form action="Insert.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="isbn" value="$r4">
<input type="submit" value="DELETE RECORD">
</form>
_END;
}
$result->close();
$conn->close();
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>