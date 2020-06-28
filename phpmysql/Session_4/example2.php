<?php
//Khoi tao doi tuong
$doituong = new Student();
$doituong = new Student(12,"TUAN", "deman@gmail.com");
//$doituong = new Student(13, "PHAM");
$doituong->id = 125;
$doituong->name = "Pham Tuan";
$doituong->email = "tuanpth1908045@fpt.edu.vn";
print_r($doituong); echo "<br> <hr>";
$doituong1 = clone $doituong;
$doituong->name = "Ok";
print_r($doituong1); echo "<br> <hr>";
print_r($doituong);
echo "<br>";
$doituong->Display();

//tao class student
Class Student{
    public $id, $name, $email;

    function Student($id, $name, $email){
         //Constructor statements go here
        this.$id = $id;
        this.$name = $name;
        this.$email = $email;
    }
//    function __construct($id, $name)
//    {
//        this.$id = $id;
//        this.$name = $name;
//    }

    function Display(){
        echo "OK Google";
    }
}

