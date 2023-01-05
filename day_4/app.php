<?php

function contarProgresso(array $arr)
{
    $progresso = 0;
    $primeiroItem = $arr[0];

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] > $primeiroItem) {
            $progresso++;
        }

        $primeiroItem = $arr[$i];
    }

    return $progresso;
}

