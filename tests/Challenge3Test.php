<?php
require_once __DIR__.'/../challenge_3.php';

use PHPUnit\Framework\TestCase;
class Challenge1Test extends TestCase{
  public function testSampleCases(){
      $this -> assertEquals('BbBb', find_uniq(['Aa', 'aaa', 'aaaaa', 'BbBb', 'Aaaa', 'AaAaAa', 'a']));
      $this -> assertEquals('foo', find_uniq(['abc', 'acb', 'bac', 'foo', 'bca', 'cab', 'cba']));
      $this -> assertEquals('victor', find_uniq(['silvia', 'vasili', 'victor']));
      $this -> assertEquals('Harry Potter', find_uniq(['Tom Marvolo Riddle', 'I am Lord Voldemort', 'Harry Potter']));
      $this -> assertEquals('a', find_uniq(['     ', 'a', ' ']));
  }
}
