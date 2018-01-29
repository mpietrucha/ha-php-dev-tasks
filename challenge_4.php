<?php

function parseTerms(array $terms, string $string){

  if(!in_array($string, array_values($terms))){
    throw new Exception('Term from given string is not avaliable');
  }

  return true;
}


$terms = [
  "term" => "value",
  "term2" => "value2",
  "term3" => "value value",
  "term4" => "value : value : value"
];

try{
  parseTerms($terms, 'valsue2');
}catch(Exception $e){
  echo $e -> getMessage();
}
