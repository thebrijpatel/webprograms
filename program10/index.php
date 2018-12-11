<html>
<head>
<title>Select Sort on Student records</title>
<style type="text/css">
h1,h3{text-align:center}
</style>
</head>
<body>
<h1>Merge sort on sample student data </h1>
<form action=" " method="post">
<h1>Sort By :
<select name="field">
 <option value=" " disabled Selected>Choose Field</option>
 <option value="Name">Name</option>
 <option value="USN">USN</option>
 <option value="Year">Year</option>
 <option value="Marks">Marks</option>
 <option value="College">College</option>
</select>
</h1>
<h1>
<input type="submit" name="submit" value="Submit">
</h1>
</form>
<?php
function selection_sort($data,$keys)
{
	for($i=0;$i<count($data)-1;$i++)
	{
		$min=$i;
		for($j=$i+1;$j<count($data);$j++)
		{
			if($data[$j]<$data[$min])
			{
				$min=$j;
			}
		}
		$data=swap_positions($data,$i,$min);
		$keys=swap_positions($keys,$i,$min);
	}
	return $keys;
}
function swap_positions($data1,$left,$right)
{
	$temp = $data1[$left];
	$data1[$left] = $data1[$right];
	$data1[$right] = $temp;
	return $data1;
}
$sql=mysqli_connect("localhost","root","","sf15cs033");
$str="Select * from studentdetails";
$res=mysqli_query($sql,$str);
$field="none";
$myarr=[];
$original=[];
$i=1;

while($arr=mysqli_fetch_assoc($res))
{
	$myarr[]=$arr;
}

if(isset($_POST['submit']) && isset($_POST['field']))
{
	$field=$_POST['field'];
	// echo $field;
	$original=array_column($myarr,$field,'No');
	$originalKey=array_keys($original);
	$originalVal=array_values($original);
	// echo $original['Name'];
	$sortedkeys=selection_sort($originalVal,$originalKey);
	$myarr=[];
	foreach($sortedkeys as $key)
	{
		$str="select * from studentdetails WHERE No='$key' ";
		$res=mysqli_query($sql,$str);
		$myarr[]=mysqli_fetch_assoc($res);
	}
}
?>
<table border="1" width="80%" align="center">
<tr>
<th colspan="6">
Student Details [Sorted by :<?php echo $field;?>]
</th>
</tr>
<tr>
<th>No</th>
<th>Name</th>
<th>USN</th>
<th>Year</th>
<th>Marks</th>
<th>College</th>
</tr>
<?php foreach($myarr as $arr) : ?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $arr['Name']; ?></td>
<td><?php echo $arr['USN']; ?></td>
<td><?php echo $arr['Year']; ?></td>
<td><?php echo $arr['Marks']; ?></td>
<td><?php echo $arr['College']; ?></td>
</tr>
<?php endforeach; ?></table>
</body>
</html>

