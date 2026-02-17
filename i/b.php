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
    	<th>ชื่อ</th> 
		<th>ชื่อจังหวัด</th>
        <th>รูปภาพ</th>
        <th>ภาค</th>
    </tr>

<?php 
	include_once("connectdb.php");
	$sql = "SELECT * FROM `provinces` AS p 
	INNER JOIN `regions` AS r
	ON p.r_id = r.r_id
	ORDER BY `p_name` ASC";
	$rs = mysqli_query($conn,$sql);
	
	while($data = mysqli_fetch_array($rs)){
		//echo $data['r_id']." ".$data['r_name']. "<br>";
		
?>
    <tr>
    	<td><?php echo $data['p_id'];?></td> 
		<td><?php echo $data['p_name'];?></td>
        <td><img src="images/<?php echo $data['p_id'];?>.<?php echo $data['p_ext'];?>"
        width="120"</td>
		<td><?php echo $data['r_name'];?></td>
    </tr>
 
<?php } ?>
</table>
</body>
</html>
