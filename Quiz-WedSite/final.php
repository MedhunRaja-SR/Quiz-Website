<?php
$conn = mysqli_connect('localhost','root','','medhun');
session_start();
//Get the Total Questions
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));

	$mark =  $_SESSION['score'];
	
	$query = "INSERT INTO result(";
	$query .= "mark)";
	$query .= "VALUES(";
	$query .= " '{$mark}'";
	$query .= ")";
	
	$insert_row = mysqli_query($conn,$query);
			
	if($insert_row){
		echo ".";
	}else{
		die("Query for Quiz is not executed");
		}
		
?>

<html>
<head>
	<title>QUIZER</title>
	<link rel="stylesheet" type="text/css" href="style6.css">
	<style type="text/css">
		body{
			background-image:url(trophies.jpg);
			background-repeat:no-repeat;
			background-size:1400px 650px;
			
		}
		p{
			font-style:italic;
			color:red;
			position:absolute;
			bottom:8px;
			right:16px;
		}
		h1{
			text-align:center;
			color:#E819EF;
		}
		h2{
			color:#2D05F9;
		}
	</style>
</head>
<body>
	<header>
	<br/>
		<h1><u>Quizzards of Oz.</u></h1>
	</header>
	<main>
		<div class="container">
			<h2><u>Your Result:</u></h2>
			<h3 style="color:green">Congratulation...!!!</h3>
			<h3>You have completed this test Successfully..</h3>
			<h3>Your	<strong>Score:</strong>	is	<?php echo $_SESSION['score']; ?> out of	<?php echo $total_questions; ?>.
			<?php unset($_SESSION['score']); ?>
			</h3>
			<br/>
		<a href="home.php" class="button"><i>home</i></a>
		</div>
	</main>
		<p>
			copyright by IT
		</p>
	</body>
</html>
					
					
			