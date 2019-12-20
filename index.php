<?php
namespace Kydryavcev;

ini_set('display_errors', 1);
error_reporting(-1);

include_once('core/EquationInterface.php');
include_once('core/LogAbstract.php');
include_once('core/LogInterface.php');
include_once('Kydryavcev/Equation.php');
include_once('Kydryavcev/SquareEquation.php');
include_once('Kydryavcev/MyLog.php');
include_once('Kydryavcev/kola_Exception.php');

echo "Vvedite tri 4isla. \n";
$perem = explode(" ", fgets(STDIN));
try
{
	$file = fopen("version", "r");
	MyLog::log("Выполняется с верисии: ".fgets($file));
	echo "Version: ".fgets($file, 4096);
	fclose($file);

	if (count($perem) != 3) 
	{						
		throw new kola_Exception("Ne tri 4isla. Poshel von.");
	} 
	else 
	{
		$a = (float)$perem[0];
		$b = (float)$perem[1];
		$c = (float)$perem[2];
	}
	$square = new SquareEquation();
	MyLog::log("Korni yravneniya:" . implode(' ', $square->solve($a, $b, $c)));
}
catch (kola_Exception $e) 
{
	 echo $e->getMessage();
	 MyLog::log($e);
}
	MyLog::write()."\n";
?>
