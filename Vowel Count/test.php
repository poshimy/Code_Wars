
<?php
  $vowelsCount = 0;
  $b=str_split($str);
  $ar=['a','e','i','o','u'];
  foreach($b as $size => $var){
    if(in_array($var,$ar)){
      $vowelsCount++;
    }
  } return $vowelsCount;
  }
