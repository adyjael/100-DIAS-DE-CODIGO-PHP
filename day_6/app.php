<?php

function nextPrime($number)
{
    if (!verifyPrime($number)) {
        do {
            $number++;
            if (verifyPrime($number)) {
                echo $number;
                break;
            }
        } while (true);
    } else {
        return $number;
    }
}


function verifyPrime($n)
{
    if ($n < 2) {
        return false;
        die;
    };
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        };
    }

    return true;
}
nextPrime(12); // 13
nextPrime(24); // 29
nextPrime(11); // 11