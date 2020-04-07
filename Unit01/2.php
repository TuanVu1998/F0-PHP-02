<?php 
	$S=1;
	$n=4;
	$factorial=1;
	for ($i=2;$i<=$n;$i++)
	{
		$factorial *=$i;
		$S += $i/$factorial;
	}
	echo "Tổng là : ".$S;

 ?>