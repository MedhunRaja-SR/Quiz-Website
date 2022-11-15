<?php
$conn = mysqli_connect('localhost','root','','medhun');
session_start();
$number = $_GET['n'];

//Query for Questions
$query = "SELECT * FROM questions WHERE question_number = $number";

//Get the Question
$result = mysqli_query($conn,$query);
$question = mysqli_fetch_assoc($result);

//Get the Options
$query = "SELECT * FROM options WHERE question_number = $number";
$choices = mysqli_query($conn,$query);

//Get the Total Questions
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
 
?>

<html>
<head>
	<title>QUIZER</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
	<style type="text/css">
		body{
			background-image:url(test.jpg);
			background-repeat:no-repeat;
			background-size:1400px 700px;
			color:#E819EF;
		}
		p{
			font-style:italic;
			color:green;
			position:absolute;
			bottom:8px;
			right:16px;
		}
		h1{
			text-align:center;
			color:red;
		}
	</style>
</head>
<body>
	<header>
		<h1>Programming Quizer</h1>
	</header>
	<main>
		<div class="container">
			<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?></div>
			<h2><?php echo $question['question_text']; ?>
			<form method="POST" action="processadmin.php">
				<ul class="choicess">
					<?php while($row=mysqli_fetch_assoc($choices)){ ?>
					<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"/><?php echo $row['coption']; ?></li>
					<?php } ?>
				</ul>	
				<input type="hidden" name="number" value="<?php echo $number; ?>"/>
				<br/>
				<input type="submit" name="submit" value="submit"/>
			</h2>	
			</form>
		</div>
	</main>
	<p>copyright by IT</p>
	
</body>
</html>
					
					
					
					
					
					
					
					
					
					