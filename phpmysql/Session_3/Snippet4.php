<?php
$x = array();
$y = array();
echo 'array()'.'<=>'.'array()'.'Return', $x <=> $y;
echo '<br>';
$m = array(1,2,3);
$n = array(1,2,3);
$p = array(1,2,3);
$q = array(1,2,3);
echo 'array(1,2,3)'.'<=>'.'array(1,2,3)'.'Return', $m <=> $n;
echo '<br>';
echo 'array(1,2,3)'.'<=>'.'array()'.'Return', $m <=> $x;
echo '<br>';
echo 'array(1,2,3)'.'<=>'.'array(1,2,4)'.'Return', $m <=> $q;
?>

