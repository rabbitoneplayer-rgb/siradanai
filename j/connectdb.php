<?php 
				$host = "localhost";
				$user = "Admin";
				$pwd = "Password";
				$db = "4167db";
				$conn = mysqli_connect($host,$user,$pwd,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
				mysqli_query($conn,"SET NAMES utf8");


?>
