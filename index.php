<?php 
require('./math.php');

$calc = new Calculate();
$calc->add(10);
$calc->add(3);
$calc->add(5);
$calc->sub(5);
$calc->mult(2);
$calc->divide(2);
$calc->add(0.4);





echo $calc->total;

?>