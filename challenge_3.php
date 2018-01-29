<?php

function find_uniq(array $strings){
  $v_0 = str_split(strtolower($strings[0]));
  $v_1 = str_split(strtolower($strings[1]));
  $v_2 = str_split(strtolower($strings[2]));

  if (!count(array_diff($v_0, $v_1))) {
    for ($i=2; $i<count($strings); $i++) {
      if (count(array_diff($v_0, str_split(strtolower($strings[$i]))))) {
        return $strings[$i];
      }
    }
  } else {
    return !count(array_diff($v_2, $v_0)) ? $strings[1] : $strings[0];
  }
}

echo find_uniq([ 'Aa', 'aaa', 'aaaaa', 'BbBb', 'Aaaa', 'AaAaAa', 'a' ]).'<br>'; // => 'BbBb'
echo find_uniq([ 'abc', 'acb', 'bac', 'foo', 'bca', 'cab', 'cba' ]).'<br>'; // => 'foo'
echo find_uniq([ 'silvia', 'vasili', 'victor' ]).'<br>'; //victor
echo find_uniq([ 'Tom Marvolo Riddle', 'I am Lord Voldemort', 'Harry Potter' ]).'<br>'; // Harry Potter
echo find_uniq([ '     ', 'a', ' ' ]); // a
