<?php
function rainTraper($height)
{
  // Algoritmo para encontrar a altura da barra mais alta à esquerda de cada barra
  $altura_esquerda = array_fill(0, count($height), 0);
  $max_esquerda = 0;
  for ($i = 0; $i < count($height); $i++) {
    if ($height[$i] > $max_esquerda) {
      $max_esquerda = $height[$i];
    }
    $altura_esquerda[$i] = $max_esquerda;
  }


  $altura_direita = array_fill(0, count($height), 0);
  $max_direita = 0;
  for ($i = count($height) - 1; $i >= 0; $i--) {
    if ($height[$i] > $max_direita) {
      $max_direita = $height[$i];
    }
    $altura_direita[$i] = $max_direita;
  }

  $agua_retida = 0;
  for ($i = 0; $i < count($height); $i++) {
    $agua_retida += min($altura_esquerda[$i], $altura_direita[$i]) - $height[$i];
  }
  echo $agua_retida;
}

rainTraper([4, 2, 0, 3, 2, 5]); // 9
