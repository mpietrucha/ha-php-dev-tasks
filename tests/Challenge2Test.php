<?php
require_once __DIR__.'/../challenge_2.php';

use PHPUnit\Framework\TestCase;
class Challenge1Test extends TestCase{
  public function testSampleCases(){
      $this -> assertEquals('Thi1s is2 4a T7est', sortStringByInsideNumber('is2 Thi1s T7est 4a'));
  }
}
