<?php

function greaterFn($num){

if($num>30){
    echo "<br>$num is grater than 30";
}
else if ($num >20){
    echo "<br>$num is grater than 20";

}
else if ($num >10){
    echo "<br>$num is grater than 10";

}
else {
    echo "<br>$num is less than 10";

}
    // return 'string';
}
greaterFn(40); // 40 is greater than 30
greaterFn(21); // 21 is greater than 20
greaterFn(12); // 12 is greater than 10
greaterFn(8);  // 8 is less than 10