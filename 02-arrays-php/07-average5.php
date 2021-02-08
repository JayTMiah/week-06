<?php

require __DIR__ . "/vendor/autoload.php";

function average5($a, $b, $c, $d, $e) {
    return ($a + $b + $c + $d + $e) / func_num_args(); // func_num_args() returns the number of arguments passed in the function
}

// … your function here

dump(average5(1, 2, 3, 4, 5)); // 3