<?php
function countVegetarianAndNoVegetaria($swekers){
    $vegetariano = 0;
    $nãoVegetariano = 0;

    for ($i = 0; $i < count($swekers); $i++) {

        if (strpos($swekers[$i], "x") !== false) {
            $vegetariano++;
        } else {
            $nãoVegetariano++;
        }
    }

    return [
        $nãoVegetariano,
        $vegetariano,
    ];
}

