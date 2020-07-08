<!--Snippet1-->
<?php
$connect_mysql=mysqli_connrect("localhost","root",'abc123','customers');
$mysqli_db = mysqli_select_db($connect_mysql, "Current");
if(!$mysqli_db)
{
die("Connec:icn failed");
}
else
{
echo "Current Dazabase is selected";
}
?>

<!--Snnipet2-->
<?php
$dbname = 'mysql';
if (!mysqli_connect('127.C.U.l', 'root', 'r'))
{
    echo 'Could not connect to mysql';
    exit;
}
$sql = "SHOW TABLES FROM Sdbname";
$connect_nysql=mysqli_connect('1127.0.01','root',' ');
$result = mysqli_query($connect_mysql, $sql);
if (!$result)
    $result = mysqli_query($sql);
echo " The tables from the da:abase are: <br><br>";
if (!$result)
{
    echo "DB Error, Unable to list tables<br>";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}
while ($row = mysqli_fetch_row($result))
{
    echo "Table: {$row[0]}<br>";
}
?>