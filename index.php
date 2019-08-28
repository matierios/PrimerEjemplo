<?php

$Numero;
$i=1;
$x=1;
$Menor=0;
$Mayor=0;

for ($Numero=2;$Numero<1000;$Numero++)
	{
		#Buscar el Menor
		while ($i < $Numero)
			{
				$Menor = $Menor + ($Numero-$i);
				$i=$i+1;
				
			}

		#Buscar el Mayor	
		while ($Mayor < $Menor)
			{
				$Mayor = $Mayor + ($Numero+$x);
				$x=$x+1;
			}

		#Comparar Mayor y Menor
		
		if ($Mayor == $Menor)

			{
				echo "el numero ",$Numero," Es un Centro Numerico","<br>";
				
			}

$i=1;
$x=1;
$Menor=0;
$Mayor=0;



	}


?>