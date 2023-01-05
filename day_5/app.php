<?php
function contarMeias($string)
{
    if(empty($string)){
        return 0;
        die;
    }
    
    $letras = str_split(strtoupper($string));
    $meias = 0;
    foreach ($letras as $letra) {
        // Se a letra estiver presente mais de uma vez na string, conte um par
        if (substr_count($string, $letra) >= 2) {
            $meias++;
        }
    }
    return floor($meias / 2);

}
contarMeias("AA"); // OUTPUT 1
contarMeias("ABABC"); // OUTPUT 2
contarMeias("CABBACCC"); // OUTPUT 4
contarMeias("AN"); // OUTPUT 0
contarMeias(""); // OUTPUT 0
