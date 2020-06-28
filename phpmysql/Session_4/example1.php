<?php
//  Khoi tao doi tuong
  $objects = new User();
  print_r($objects);
  echo "<br>";

  //Gan gia tri cho doi tuong
 $objects->name = "Tuan";
 $objects->password = "mypassword";
 print_r($objects); echo "<br>";
 $objects->save_user();

 class User {
//     Phuong thuc
     public $name, $password;
//     Method - Ham
     function save_user(){
         echo "Have User code goes here";
     }
 }
 ?>