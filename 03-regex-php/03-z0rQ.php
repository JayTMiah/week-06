<?php

require __DIR__ . "/vendor/autoload.php";

function zOrQ($str) {
    return preg_match("/[Z Q z q]/", $str) === 1;  // It doesnt matter if there are spaces in the regex or not for this.
}
// … your function here

dump(zOrQ("blah")); // false
dump(zOrQ("blqh")); // true
dump(zOrQ("bZ3h5")); // true
dump(zOrQ("bz3h5")); // true