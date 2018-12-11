<html>
<head>
<title>Pattern Matching Using Python</title>
</head>
<body>
<?php
$res=shell_exec("python PythonServer/states.py");
$states=explode("\n",$res);
echo "<h1><center>Pattern Matching using python</center></h1>";
echo "<h3><center>4SF15CS033</center></h3>";
echo "<hr/>";
echo"statement is:<b>$states[4]</b><br/>";
echo "word that end with xas:<b>$states[0]</b><br/>";
echo "word that starts with k and ends with s(case insensitive):<b>$states[1]</b><br/>";
echo "word that starts with M and ends with s:<b>$states[2]</b><br/>";
echo "word that ends with a:<b>$states[3]</b>";
?>
</body>
</html>
