
<?php
$str="abracadabra";
$b=str_split($str);
  $vowelsCount = 0;
  
  $ar=['a','e','i','o','u'];
  foreach($b as $size=>$var){
    if(in_array($var,$ar)){
      $vowelsCount++;
    }
  }
  
  
  echo $vowelsCount;
