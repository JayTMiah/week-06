<?php

require __DIR__ . "/vendor/autoload.php";

function phoneNumber($str) {
    return preg_match("/^[0-9-]+$/", $str) === 1;
}
// … your function here

dump(phoneNumber("blah")); // false
dump(phoneNumber("12-323-5-344")); // true
dump(phoneNumber("12-34-a334-43")); // false
dump(phoneNumber("--123----23123")); // true