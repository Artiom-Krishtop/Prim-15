<?php

// Определить количество различных делителей целого числа N.

$n = 1536;

$count = 0;

$arrNum = [];

for ($i=1; $i <=$n ; $i++) {

  if (($n % $i) == 0) {
    $count++;

    $arrNum[] = $i;
  }
}

echo 'Колисетво делителей числа ' . $n . ' равно ' . $count;
