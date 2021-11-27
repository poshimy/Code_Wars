<?php
$c=0;
for($i=0;$i<count($bus_stops);$i++){
  $c += intval($bus_stops[$i][0]);
  $c -= intval($bus_stops[$i][1]);
}
return $c;
