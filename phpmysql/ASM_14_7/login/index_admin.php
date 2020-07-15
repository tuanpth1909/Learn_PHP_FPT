<?php
echo <<<_END
<form action="index_admin.php" method="get">
<h2>Welcome to Page Admin</h2>
<h4>You can add products from admin rights</h4>
<input type="submit" name="addproduct" value="Add product"><br>
<h4>Find products easily with admin rights</h4>
<input type="submit" name="searchproduct" value="Search product"><br>
<h4>Remove products that your products are no longer selling</h4>
<input type="submit" name="deleteproduct" value="Delete product"><br>
<h4>Regular product updates with admin rights</h4>
<input type="submit" name="updateproduct" value="Update product"><br>
</form>
_END;

//chuyen den trang them san pham
if (isset($_GET['addproduct']))
{
    header("Location: ../page/addproduct.php");
}

//chuyen den trang tim san pham
if (isset($_GET['searchproduct']))
{
    header("Location: ../page/search.php");
}

//chuyen den trang xoa san pham
if (isset($_GET['deleteproduct']))
{
    header("Location: ../page/delete.php");
}

//chuyen den trang update san pham
if (isset($_GET['updateproduct']))
{
    header("Location: ../page/update.php");
}