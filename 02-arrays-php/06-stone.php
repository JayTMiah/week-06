<?php

require __DIR__ . "/vendor/autoload.php";

function stone($a) {
    return $a / 6.35;
}

// … your function here

dump(
    stone(74), // 11.65278
    stone(50), // 7.8735
);