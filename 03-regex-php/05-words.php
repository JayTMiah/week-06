<?php

require __DIR__ . "/vendor/autoload.php";

function words($str) {
    return preg_split("/[a-z]$\s*/", $str);
}
// … your function here

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]