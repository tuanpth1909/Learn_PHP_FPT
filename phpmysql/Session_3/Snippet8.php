<?php
include 'myfile.php';
use aptech\{Boston, NewYork};
use function aptech\{fool, foo2};
$d = new Boston();
$d -> say();
 $n = new NewYork();
 $n -> say();
 fool();
 foo2();
 ?>