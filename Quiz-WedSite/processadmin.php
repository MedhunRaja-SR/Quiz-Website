<?php
$conn = mysqli_connect('localhost','root','','medhun');
?>
<?php session_start() ?>
<?php
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	if($_POST){
		$query = "SELECT * FROM questions";
		$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
		
		$number = $_POST['number'];
		
		$selected_choice = $_POST['choice'];
		
		$next = $number+1;
		
		$query = "SELECT * FROM options WHERE question_number = $number AND is_correct =1 ";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
		
		$correct_choice = $row['id'];
		
		if($selected_choice == $correct_choice){
			$_SESSION['score']++;
		}
		
		if($number == $total_questions){
			header("LOCATION: finaladmin.php");
		}else{
			header("LOCATION: questionadmin.php?n=".$next);
		}
	}
?>