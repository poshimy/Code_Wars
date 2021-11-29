<?php
$count = strlen($n);
foreach(str_split($n) as $key => $value){
    if($value != 0){
        $string[] = str_pad($value,$count,"0");
    } 
    $count--;
}
return  implode(" + ", $string);
