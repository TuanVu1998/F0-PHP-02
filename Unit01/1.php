<?php
$a=4;
$b=8;
$c=3;
$denta=$b*$b-4*$a*$c;
if($denta<0)
{
echo "Phương trình vô nghiệm";
}
elseif ($denta>0) {
	$x1=(-$b + sqrt(($denta)))/2*$a;
	$x2=(-$b - sqrt(($denta)))/2*$a;
	echo "Phương trình có hai nghiệm phân biệt ";
	echo "<br> x1 = ".$x1;
	echo "<br> x2 = ".$x2;
}
else{
	$x12=(-$b)/2*$a;
	echo "Phương trình có nghiệm kép ";
	echo "<br> x12 = ".$x12;
}
?>