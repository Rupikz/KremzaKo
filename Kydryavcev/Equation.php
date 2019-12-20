<?php
namespace Kydryavcev;

class Equation
{
	protected $x;
	function equation($a,$b)
	{
		if($a==0)
		{
			throw new Kola_Exception("yravnenie ne syshestvyet \n");
		}
		//MyLog::Log("Lineynoe ".$a."x + ".$b." = 0");
		return $this->x=array(-$b/$a);
	}
}
?>