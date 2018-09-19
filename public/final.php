<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_code"];
	
	
	//echo $col_id;
	$year = $_SESSION['aca_year'];
    $eng_year = date('Y');

    $cou_code_array = $_SESSION['array'];
	$course_strength = $_SESSION["course_strength"];
	$n = count($cou_code_array);
	// $year = $_SESSION['aca_year'];
	// $date = date('d/m/Y');
	$i = 0;
	$total_amount = 0;
	$total_payment = 0;
	//print_r($cou_code_array);
	//print_r($_POST);
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		foreach($cou_code_array as $code)
		{ 	
			
			$convener = $course_strength[$code]["convener"];
			$spot = $course_strength[$code]["spot"];
			$management = $course_strength[$code]["management"];
		 	//calculating total strength
		 	$total = $convener + $spot + $management;
		 	
		 	//retriving amount from fees database
			$amount = mysqli_query($con,"SELECT amount FROM fees WHERE cou_code = '$code'");
			$amount = mysqli_fetch_array($amount);
			$amount = $amount['amount'];
			$actual_pay = $total * $amount;

			$paid = $course_strength[$code]['amount'];
			$due = $actual_pay - $paid;

			// echo $col_id."<br>";
			// echo $code."<br>";
			// echo $year."<br>";
			// echo $convener."<br>";
			// echo $spot."<br>";
			// echo $management."<br>";
			// echo $total."<br>";
			// echo $actual_pay."<br>";
			// echo $paid."<br>";
			// echo $due."<br>";
			// echo $eng_year."<br>";

			$query = "INSERT INTO first_year(col_code,cou_code,year,convener,spot,management,total,actual_pay,paid,due,eng_year) VALUES ('$col_id','$code','$year','$convener','$spot','$management','$total','$actual_pay','$paid','$due','$eng_year')";
			if(!mysqli_query($con,$query)){
				//echo "Error";
				header("location : proceed.php");
			}
			// else{
			// 	echo "success";
			// }
		}
		header("location:home.php");
	}
	else{
		header("location:home.php");
	}
	

?>
