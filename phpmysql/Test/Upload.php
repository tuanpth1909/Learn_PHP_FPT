<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="Upload.php" enctype="multipart/form-data">
   File: <input type="file" name="avatar"/><br>
    <input type="submit" name="uploadclick" value="Upload"/>
</form>
<?php //// Xử Lý Upload
//
//// Nếu người dùng click Upload
//if (isset($_POST['uploadclick']))
//{
//    // Nếu người dùng có chọn file để upload
//    if (isset($_FILES['avatar']))
//    {
//        // Nếu file upload không bị lỗi,
//        // Tức là thuộc tính error > 0
//        if ($_FILES['avatar']['error'] > 0)
//        {
//            echo 'File Upload Bị Lỗi';
//        }
//        else{
//            // Upload file
//            move_uploaded_file($_FILES['avatar']['tmp_name'], './folder/'.$_FILES['avatar']['name']);
//            echo 'File Uploaded';
//        }
//    }
//    else{
//        echo 'Bạn chưa chọn file upload';
//    }
//}
//?>
<?php
var_dump($_FILES);
?>
</body>
</html>