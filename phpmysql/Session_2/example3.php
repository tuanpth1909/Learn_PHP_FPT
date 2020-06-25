<?php

//  Hàm viết hoa chữ cái đầu của từ
  function VietHoaChuDau($fname,$lname){
      $fname = ucfirst($fname);
      $lname = ucfirst($lname);
      return $fname . " " . $lname;
  }
  echo VietHoaChuDau("tuan", "pham");

  echo "<br>";

//  Viết hoa tất cả các chứ được truyền vào
  function VietHoaText($n1, $n2){
      $n1 = strtoupper($n1);
      $n2 = strtoupper($n2);
      return $n1 . " " . $n2;
  }
  echo VietHoaText("pham", "tuan");

echo "<br>";

  //Viết hoa chữ nhưng được trả về một chuỗi cho người dùng xử lí theo ý muốn
  function VietHoaMang($fn,$ln){
      $fn = ucfirst($fn);
      $ln = ucfirst($ln);

      return array($fn,$ln);
  }
  $name = VietHoaMang("tuan", "pham");
  echo $name[1] . " " . $name[0];
?>

