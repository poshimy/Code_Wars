<?php
$a = '1 2 3 4 5 6';
$b = explode(' ',$a);
return max($b). ' '.min($b);