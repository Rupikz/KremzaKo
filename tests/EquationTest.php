<?php

include_once('../Kydryavcev/kola_Exception.php');

include_once('../core/EquationInterface.php');
include_once('../core/LogInterface.php');
include_once('../core/LogAbstract.php');

include_once('../Kydryavcev/myLog.php');
require_once '../Kydryavcev/Equation.php';

class EquationTest extends PHPUnit\Framework\TestCase {

	protected $objEquation;

    protected function setUp(): void
    {
        $this->objEquation = new Kydryavcev\Equation();
    }

    protected function tearDown(): void
    {
        $this->objEquation = NULL;
    }


    public function testEquation($a, $b, $c)
    {
        $this->assertEquals($c, $this->objEquation->equation($a, $b));
    }
   
    public function providerEquation()
    {
        return array(
            array(2, 2, -1),
            array(8, 3, -0.38),
            array(2, 15, -7.5),
        );
    }

    public function testEquation2($a, $b)
    {
        $this->expectException(Kydryavcev\Kola_Exception::class);
        $this->objEquation->equation($a, $b);
    }
   
    public function providerEquation2()
    {
        return array(
            array(0, 228),
            array(0, 1488),
            array(0, 0),
        );
    }
}
