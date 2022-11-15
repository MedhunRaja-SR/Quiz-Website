<?php
$conn = mysqli_connect('localhost','root','','medhun');
if(isset($_POST['submit'])){
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	
	$query = "INSERT INTO questions(";
	$query .= "question_number,question_text)";
	$query .= "VALUES(";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";
	
	$result = mysqli_query($conn,$query);
	
	if($result){
		foreach($choice as $option => $value){
			if($value != ""){
				if($correct_choice == $option){
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}

			$query = "INSERT INTO options (";
			$query .= "question_number,is_correct,coption)";
			$query .= "VALUES (";
			$query .= "'{$question_number}','{$is_correct}','{$value}')";
			
			$insert_row = mysqli_query($conn,$query);
			
			if($insert_row){
				continue;
			}else{
				die("2nd query for choices is not executed");
			}
		}
	}
	$message = "Question has been added Successfully!";
	}	
}
	$query = "SELECT * FROM questions";
	$questions = mysqli_query($conn,$query);
	$total = mysqli_num_rows($questions);
	$next = $total+1;
	
?>

<html>
	<head>
		<title>Programming QUIZER</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
			label{
              display:inline-block;
              width:35%;
              padding-left:10px;
              text-align:left;
              font-size:x-large;
              line-height:20px;
			}
			body{
				background-image:url('logo.png');
				background-repeat:no-repeat;
				background-size:300px 300px;
				background-position:center;
				color:#D91B48;
			}
			h4{
				color:#9B4DD7;
			}
			h2{
				text-align:center;
				color:#2D05F9;
			}
		</style>

	</head>
	<body>
		<header>
			<div class="container">
				<h2 style="color:#1BD935"><u>Quizzards of Oz.</u></h2>
			</div>
		</header>
		<main>
			<center>
				<div class="container">
					<h2>Add Question</h2>
					<?php
						if(isset($message)){
							echo "<h4>" .$message. "</h4>";
						}
					?>
					<form method="POST" action="add.php">
						<p>
							<label>Question Number:</label>
							<input type="number" name="question_number" value="<?php echo $next; ?>"/>
						</p>
						<p>
							<label>Question Text:</label>
							<input type="text" name="question_text"/>
						</p>
						<p>
							<label>choice 1:</label>
							<input type="text" name="choice1"/>
						</p>
						<p>
							<label>choice 2:</label>
							<input type="text" name="choice2"/>
						</p>
						<p>
							<label>choice 3:</label>
							<input type="text" name="choice3"/>
						</p>
						<p>
							<label>choice 4:</label>
							<input type="text" name="choice4"/>
						</p>
						<p>
							<label>Correct option Number:</label>
							<input type="number" name="correct_choice"/>
						</p>
						<br/><br/>
						<input type="submit" name="submit" value="submit"/>
						
					</center>
					</form>
				</div>
		</main>
		<br/>
		<h4 align="right">
				<i>copyright by IT</i>
		</h4>
	</body>
</html>