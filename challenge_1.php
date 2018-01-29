<?php

function createBigLetterString(string $string){
  $backup = [];
  foreach (str_split($string) as $letter) {
    if(ctype_upper($letter)){
      $result .= $letter;
    }else{
      $backup[] = strtoupper($letter);
    }
  }

  $result .= implode('', $backup);

  return substr($result, 0, 3);
}


echo createBigLetterString("Test Me Please").'<br>';
echo createBigLetterString("TEst me please").'<br>';
echo createBigLetterString("Tst Me please").'<br>';
echo createBigLetterString("tEst Me please").'<br>';
echo createBigLetterString("test Me please").'<br>';
echo createBigLetterString("test me please").'<br>';
echo createBigLetterString("test me pleasE");
