<?php 
 $birth_year = mt_rand(1970,2021);
 $current_year = 2021;
if(($current_year-$birth_year)>18){
    echo "$birth_year You can drive ";
}
else{
    echo " $birth_year You still a kid, go and play GTA";
}
?> 