<?php
  include "Calculator.php";

  use PHPUnit\Frameworl\TestCase;

  class calculatortest extends TestCase {
    private $calculate;

    public function setup() : void {
        $this->calculate = new Calculator();
    }

    public function testAdd(){
      $this->assertEquals(4,$this->calculate->add(4,1));
    }
  }