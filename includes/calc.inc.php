<?php
//Here we include the Calc class so we can access it
declare(strict_types = 1);
include 'class-autoload.inc.php';



 $num1 = $_POST["num1"];
 $oper = $_POST["oper"];
 $num2 = $_POST["num2"];


 $calc = new Calc((int) $num1,(string)$oper, (int) $num2 );
 echo $calc->calculator();




?>
