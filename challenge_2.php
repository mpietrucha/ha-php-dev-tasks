<?php

function sortStringByInsideNumber(string $string){
  $strings = explode(' ', $string);

  $array = [];
  foreach ($strings as $string) {
    foreach (str_split($string) as $letter) {
      if(filter_var($letter, FILTER_SANITIZE_NUMBER_INT)){
        $array[$letter] = $string;
      }
    }
  }

  ksort($array);
  return implode(' ', $array);
}

echo sortStringByInsideNumber('is2 Thi1s T7est 4a');
