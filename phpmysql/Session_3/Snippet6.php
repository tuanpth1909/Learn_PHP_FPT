<?php
function e(){
    echo "This is e() \n";
};

function f(){
    echo "This is a f() \n";
return e;
};
 function g(){
     echo "This is a g() \n";
return f;
 };
 g();
 echo "**********\n";
 g()();
 echo "**********\n";
 g()()();
 ?>