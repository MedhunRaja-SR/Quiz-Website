<?php
$conn = mysqli_connect('localhost','root','','medhun');
if(!$conn){
		die("Connection failed:".mysqli_connect_error());
		} 
		
	$number = $_POST['number'];
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	
	$query = "INSERT INTO trainer(";
	$query .= "number,name,mail)";
	$query .= "VALUES(";
	$query .= " '{$number}','{$name}','{$mail}' ";
	$query .= ")";
	
	$insert_row = mysqli_query($conn,$query);
			
	if($insert_row){
		header("location: main.php");
		
	}else{
		die("Query for Data is not executed");
		}


?>
