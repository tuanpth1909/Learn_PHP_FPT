<?php
class Greeting {
    private $word = "Hello";
}
$closure = function($whom){
    echo "$this -> word $whom \n";
};
$boj = new Greeting();
$closure -> call($obj,'John');
$closure -> call($obj,'Kevin');
?>
