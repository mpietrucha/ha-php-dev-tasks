<?php
require_once __DIR__.'/../challenge_4.php';

use PHPUnit\Framework\TestCase;

class Challenge1Test extends TestCase{
  /**
  * @expectedException Exception
  */
  public function testException(){
    parseTerms([], 'value');
  }

  public function testTermsPass(){
    $this -> assertTrue(parseTerms([
      "term" => "value",
      "term2" => "value2",
      "term3" => "value value",
      "term4" => "value : value : value"
    ], 'value'));
  }
}
