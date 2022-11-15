<?php
$conn = mysqli_connect('localhost','root','','medhun');
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
?>

<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="style4.css" />
	<style type="text/css">
		body{
			background-image:url(ready.gif);
			background-repeat:no-repeat;
			background-size:1000px 500px;
			background-position:right;
		}
		p{
			font-style:italic;
			color:red;
			position:absolute;
			bottom:8px;
			right:16px;
		}
		h2{
			text-align:center;
			color:#2D05F9;
		}
	</style>
</head>
<body>
	<br/>
	<h2 align="center">Quizzards of Oz.</h2>
	<div class="container">
	<br/>
		<h3 style="color:green">Test your Programming Knowledge</h3>
		<h3>This is the MCQ test on Programming.</h3>
			<ul>
				<li><strong>Number of Questions:</strong>		<?php echo $total_questions; ?></li><br/>
				<li><strong>Type:</strong>		Multiple choice</li><br/>
				<li><strong>Estimated Time:</strong>		<?php echo $total_questions*1.5; ?> minutes</li><br/>
			</ul>
				<a href="question.php?n=1" class="start">Start Quizer</a>
	</div>
	<br/><br/>
	<p align="right">	
		copyright by IT
	</p>	
</body>
</html>