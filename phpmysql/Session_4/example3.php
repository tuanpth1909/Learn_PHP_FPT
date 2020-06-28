<?php
 class User{
     public $name,$password;
     function save_user(){
         echo "Have User code goes here";
     }
     function run(){
         echo "i am a father";
     }
 }

 class Subscriber extends User{
     public $phone, $email;
     function display(){
         echo "Name: ".$this->name ."<br>";
         echo "PassWord: ".$this->password ."<br>";
         echo "Phone: ".$this->phone ."<br>";
         echo "Email: ".$this->email ."<br>";
     }
     function run(){
         echo "i am my son";
     }
     function run2(){
         parent::run();
     }
 }


 $object = new Subscriber();
 $object->name = "Tuan";
 $object->password = "NoPass";
 $object->phone = "0382548442";
 $object->email = "email@gmail.com";
 $object->display();
 $object->run2();
?>