<?php

require __DIR__ . "/vendor/autoload.php";

function mi5($str) {
    return preg_match("/[00]/", $str ) === 1;
}
// … your function here

dump(mi5("007")); // true
dump(mi5("oo8")); // false
dump(mi5("003")); // true
dump(mi5("M")); // false