<?php
require_once __DIR__.'/../challenge_1.php';

use PHPUnit\Framework\TestCase;
class Challenge1Test extends TestCase{
  public function testSampleCases(){
    $this -> assertEquals('TMP', createBigLetterString('Test Me Please'));
    $this -> assertEquals('TES', createBigLetterString('TEst me please'));
    $this -> assertEquals('TMS', createBigLetterString('Tst Me please'));
    $this -> assertEquals('EMT', createBigLetterString('tEst Me please'));
    $this -> assertEquals('MTE', createBigLetterString('test Me please'));
    $this -> assertEquals('TES', createBigLetterString('test me please'));
    $this -> assertEquals('ETE', createBigLetterString('test me pleasE'));
  }
}
