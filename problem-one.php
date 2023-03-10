<?php

$a = [];
for($x = 0; $x < 1000; $x++) {
    if(!is_float($x / 3) || !is_float($x / 5)) {
        $a[$x] = $x;
    }
}

echo array_sum($a);
