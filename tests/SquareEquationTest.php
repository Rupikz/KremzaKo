<?php

include_once('../Kydryavcev/kola_Exception.php');

include_once('../core/EquationInterface.php');
include_once('../core/LogInterface.php');
include_once('../core/LogAbstract.php');

include_once('../Kydryavcev/myLog.php');
require_once '../Kydryavcev/Equation.php';
require_once '../Kydryavcev/SquareEquation.php';

class SquareEquationTest extends PHPUnit\Framework\TestCase {

	protected $objSquareEquation;

    protected function setUp(): void
    {
        $this->objSquareEquation = new Kydryavcev\SquareEquation();
    }

    protected function tearDown(): void
    {
        $this->objSquareEquation = NULL;
    }
    
    public function testDiskr($a, $b, $c, $d)
    {
        $this->assertEquals($d, $this->objSquareEquation->diskr($a, $b, $c));
    }
   
    public function providerDiskr()
    {
        return array(
            array(2, 4, 2, 0),
            array(1, 4, 2, 8),
            array(2, 4, 4, -16),
        );
    }
    
    public function testSolve($a, $b, $c, $d)
    {
        $this->assertEquals($d, $this->objSquareEquation->solve($a, $b, $c));
    }
   
    public function providerSolve()
    {
        return array(
            array(2, 6, 3, array(-0.63, -2.37)),
            array(1, 4, 2, array(-0.59, -3.41)),
            array(2, 4, 2, array(-1)),
        );
    }

    public function testSolve2($a, $b, $c)
    {
        $this->expectException(Kydryavcev\kola_Exception::class);
        $this->objSquareEquation->solve($a, $b, $c);
    }
   
    public function providerSolve2()
    {
        return array(
            array(6, 2, 5),
            array(21, 8, 3),
            array(1000, 1, 2),
            array(0, 0, 0),
        );
    }
}
