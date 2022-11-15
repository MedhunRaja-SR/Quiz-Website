<html>
<head>
	<title>INFO</title>
	<style type="text/css">
			body{
				background-image:url(emoji.jpg);
				background-repeat:no-repeat;
				background-size:1400px 650px;
				color:white;
			}
			p{
				font-style:italic;
				color:black;
				position:absolute;
				bottom:8px;
				right:16px;
			}
			h2{
				text-align:center;
				color:black;
			}
	</style>
</head>
<body>
<center>
<h2><u>Quizzards of Oz.</u></h2>
<?php
$conn = mysqli_connect('localhost','root','','medhun');
session_start();

$query = "SELECT * FROM trainer INNER JOIN result ON trainer.id=result.id";
$result = mysqli_query($conn,$query);
echo	"<table border=1 width=50%  bgcolor=BLACK cellpadding=3px>
		<Tbody><Thead style='color:red;'><td align=center><i>Id</i></td><td align=center><i>Number</i></td>
		<td align=center><i>Name</i></td><td align=center><i>E.Mail</i></td><td align=center><i>Mark</i></td></Thead>";
		
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["number"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["mail"]."</td>";
		echo "<td>".$row["mark"]."</td>";
		echo "<tr>";
	}
	echo "</table>";
}

else{
	echo "0 result";
}
?>
</center>
<p>
	copyright by IT
</p>
</body>
</html>