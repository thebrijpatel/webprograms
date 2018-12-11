 <html>
<head>
<title>Visitors count</title>
<style type="text/css">
h1,h2,h3 {text-align:center}
</style>
</head>
<body>
<h1>Welcome to My Web Page</h1>
<h3>4SF15CS033</h3>
<?php
$file="count.txt";
$handle=fopen($file,'r') or die("cannot open file: $file");
$count=fread($handle,10);
fclose($handle);
$count++;
echo "<h2>No 	of Visitors who Visited this Page:$count</h2>";
$handle=fopen($file,'w')or die("Cannot open file:$file");
fwrite($handle,$count);
fclose($handle);
?>
<hr/>
</body>
</html>

