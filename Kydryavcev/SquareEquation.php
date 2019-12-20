<?php
namespace Kydryavcev;

class SquareEquation extends Equation implements \core\EquationInterface
{
	protected $dis;
	
	protected function diskr($a,$b,$c)
	{
		$dis=$b*$b-4*$a*$c;
		return $this->dis=$dis;
	}
	
	function solve($a,$b,$c)
	{
		$this -> diskr($a, $b, $c);
		
		if($a==0)
		{
			return $this->equation($b,$c);
		}
		if($this->dis==0)
		{	
			//MyLog::log("Diskriminant = 0; Otvet: \n");
			return $this->x=array(-$b/(2*$a));
		}
		if($this->dis<0)
		{
			throw new kola_Exception("Diskriminant menshe nulya. Net resheniy \n");
		}
		$x1=((-$b+sqrt($this->dis))/(2*$a));
		$x2=((-$b-sqrt($this->dis))/(2*$a));
		return $this->x = array($x1, $x2);
		
	}
}
?>