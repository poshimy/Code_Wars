
<?php
$n = 5;
$d = 9;
$k = '';
for($i=0; $i<=$n; $i++){
    $k .= (string)$i**2;
  
}
$count = substr_count($k,(string)$d);
return $count;
