<?php 

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../src/Calculate.php';

use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
  // 1 , 1 => 2
  public function testPlusWithOneAndOneShouldReturnTwo()
  {
    $calculatorObj = new Calculate();
    $result = $calculatorObj->plus(1, 1);
    $this->assertEquals('2', $result);
  }

  //2, 1 => 3
  public function testPlusWithTwoAndOneShouldReturnThree()
  {
    $calculatorObj = new Calculate();
    $result = $calculatorObj->plus(2, 1);
    $this->assertEquals('3', $result);
  }

  public function testPlusWithTwoAndOneShouldNotReturnFour()
  {
    $calculatorObj = new Calculate();
    $result = $calculatorObj->plus(2, 1);
    $this->assertTrue($result !== 4);
  }

}

?>