<?php
$mat1=Array(Array(1,2),
Array(3,4),
Array(5,6));
$mat2=Array(Array(2,4,8),
Array(1,3,5));
echo "<!DOCTYPE html><head><title>Matrix Multiplication</title></head><body><h3>4SF15CS033</h3>";
if(count($mat1[0])!=count($mat2))
{
echo "<h1>Incomplete Matrix</h1>";
exit(0);
}
$res=array();
echo "<h1>Matrix A:</br>";
for($i = 0; $i < count($mat1); $i++)
{
for($j = 0; $j < count($mat1[0]); $j++)
{
 echo $mat1[$i][$j] . " ";
}
echo "<br/>";
}
echo "</h1>";

echo "<h1>Matrix B:</br>";
for($i = 0; $i < count($mat2); $i++)
{
for($j = 0; $j < count($mat2[0]); $j++)
{
 echo $mat2[$i][$j] . " ";
}
echo "<br/>";
}
echo "</h1>";
for($i = 0; $i < count($mat1); $i++)
for($j = 0; $j < count($mat2[0]); $j++)
{
$res[$i][$j] =0;
for($k = 0; $k < count($mat2); $k++)
$res[$i][$j]=$res[$i][$j]+$mat1[$i][$k]*$mat2[$k][$j];
}
echo "<h1> A x B:</br>";
for($i = 0; $i < count($res); $i++)
{
for($j = 0; $j < count($res[0]); $j++)
{
echo $res[$i][$j] . " ";
}
	echo "<br/>";
}
echo "</h1>";
echo "</body></html>";
?>
