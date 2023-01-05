<?php

function findingNemo(string $str)
{
    $nemo = explode(" ", $str);
    $position = array_search("Nemo", $nemo);
    $found = "";

    if ($position === 0) {
        $found = "I found Nemo at 1!";
    } else if ($position > 0) {
        $found = "I found Nemo at " . $position + 1 . "!";
    } else {
        $found = "I can't find Nemo :(";
    }

    return $found;
}
