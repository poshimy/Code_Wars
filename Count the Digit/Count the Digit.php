
<?php
    $k='';
  for($i=0;$i<=$n;$i++){
    $k .= (string)$i**2;
  }
  $str = substr_count($k,(string)$d);
  return $str;
}
