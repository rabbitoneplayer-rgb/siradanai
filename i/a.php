<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>สิรดนัย ชุมพล(โฟกัส)</title>
</head>

<body>
<h1>สิรดนัย ชุมพล(โฟกัส)</h1>

<table border="1">
	<tr>
    	<th>รหัสภาค</th> 
		<th>ชื่อภาค</th>
    </tr>

<?php 
	include_once("connectdb.php");
	$sql = "SELECT * FROM `regions` ORDER BY `regions`.`r_name` ASC";
	$rs = mysqli_query($conn,$sql);
	
	while($data = mysqli_fetch_array($rs)){
		//echo $data['r_id']." ".$data['r_name']. "<br>";
		
?>
    <tr>
    	<td><?php echo $data['r_id'];?></td> 
		<td><?php echo $data['r_name'];?></td>
    </tr>
 
<?php } ?>
</table>
</body>
</html>
