<?php
//Idea String In Php
echo"Hello World Im Twanst Dev eloper Kurdish";
echo"<br> IM Twanst Codes ";
$color="Red";

echo "<br> My Hous is ".$color." Color<br>";
echo "<br> My car is ".$color." Color<br>";
echo "<br> My Laptop is ".$color." Color<br>";


$txt="Hello Twanst Codes In Github";
$x=5;
$y=21;

echo "<br> this is Result= ".$x+$y."<br>";

$TXT="<b> PHP !</b>";

echo "Im Love Learn ".$TXT." Easy<br>";

echo"<hr>";
//Idea Conditioanl In Php

// write programing in php for conditional date time now Day or night

// first just Day
$t=date("H");
if($t<"20"){
    echo "Good Day";
}
//both
/* 
$t=date("H");
if($t<"20"){
    echo "Good Day";
}else{
    echo"Good Night";
}
*/
echo"<hr>";
//Write Programm drive age 
$age=18;
if($age>=18){
    echo"Successfully Age For Driving";
}else{
    echo"Please try again For Age 18 or more";
}
echo"<hr>";

// write programing in php For Odd and even number
$num1=100;

if($num1 %2==0){
    echo"Even";
}else{
    echo"Odd";
}
echo"<hr>";
// write programiing in php Max number Bettwin Three Number

$x=2;
$f=23;
$r=4;

if($x>$f || $x>$r){
    echo "value X Max Num Ber It Is:".$x;
}elseif($f>$x || $f>$r){
    echo"Value F Max Num It Is:".$f;
}elseif($r>$x || $r>$f){
    echo"Value R Max Num It Is:".$r;
}else{
    echo "All Number Equail";
}
echo"<hr>";
// wriet Program Mark Students
$p=55;
if($p>=0 && $p<50){
    echo"Faild";
}elseif($p>=50 && $p<60){
    echo"Fair";
}elseif($p>=60 && $p<70){
    echo"Medium";
}elseif($p>=70&& $p<=80){
    echo"Good";
}elseif($p>=80&& $p<90){
    echo"Very Good";
}elseif($p>=90&& $p<=100){
    echo"Excel";
}else{
    echo"Erro Just Number InPut";
}
?>