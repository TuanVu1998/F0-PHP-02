<?php

echo "<center> <h1>Bảng cửu chương bằng for</h1>";
echo "<center> Bảng cửu chương<br>";
echo "<br>";
for($i=1;$i<=10;$i++)
	{
		echo "<pre>";
		for($j=2;$j<=9;$j++)
		{
			$multiply = $i*$j;
			echo "$i x $j = $multiply	";
		}
		echo "</pre>";
		echo "<br>";
	}
?>