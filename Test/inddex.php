<?php
// Loop In Php

$arr=["Twanst "," Codes "," Error "," Php"];

//for loop
echo"This is Statment For Loop In Php <br>";
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
}

echo"<hr>";
//foreach Loop
echo"This is Statment Foreach Loop In Php <br>";

foreach($arr as $x){
    echo $x;
}
echo"<hr>";
//while Loop
echo"This is Statment while Loop In Php <br>";
$f=0;
while($f<count($arr)){
    echo $arr[$f] ;
    $f++;
}
echo"<hr>";
//Do while Loop
echo"This is Statment Do while Loop In Php <br>";
$m=0;
do{
echo $arr[$m];
$m++;
}while($m<count($arr))





?>