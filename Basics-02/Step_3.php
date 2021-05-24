<?php
$var1 = 32;
$var2 = 45;
 
// Swap Logic

echo "\nThe number before swapping is:\n";
echo "Number var1 =".$var1." and var2=".$var2 ."<br>";

$temp = $var1;
$var1 = $var2;
$var2 = $temp;
 
echo "\nThe number after swapping is: \n ";
echo "Number var1 =".$var1." and var2=".$var2."\n";
?>