<?php 
	require("../includes/init.php");
	//require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_id"];
	$year = empty($_GET['year']) ? date('Y') : $_GET['year'];
	$_SESSION['year'] = $year;

	$cou_code_arr = $_SESSION['array'];
	$i = 0;
	foreach ($cou_code_arr as $value) {
		# code...
		$amount = $value.$i;
		$i++;
		if(empty($_POST[$amount])){
			echo "Error";
		}
		else{
			$pie = test_input($_POST[$amount]);
			echo $pie;
		}
		
	}

	/* check fo course code

	$cou_name_arr = $_GET["options"];

	$cou_code_arr = [];

	foreach ($cou_name_arr as $value) {
		# code...
		echo $value;
	}

	foreach ($cou_name_arr as $value) {
		# code...
		$sql = "SELECT * from course WHERE cou_name = '$value'";
		$rows = mysqli_query($con,$sql);
		if($rows){
			foreach ($rows as $row) {
				# code...
				$cou_code_arr[] = $row['cou_code'];
			}
		}
	}
	*/

	/* //calculating actual pay based on table values

	$cou_code_arr = $_SESSION["array"];

	foreach ($cou_code_arr as $key) {
		# code...
		$sql = "SELECT amount FROM fees WHERE cou_code = '$key'";
		$amounts = mysqli_query($con,$sql);
		if($amounts){
			foreach ($amounts as $value) {
				# code...
				$amount = $value['amount'];
			}
		}
		echo $amount;
		echo $key;
	}

	//doesn't work
	$pay = mysql_query($con,"SELECT amount FROM fees WHERE cou_code = 'A'");
	echo $pay[''];
	*/

	// Works as a object printing
	$sql1 = "SELECT cou_name FROM course WHERE cou_code = 'A'";
	$result = mysqli_query($con,$sql1);
	$final = mysqli_fetch_array($result);
	print_r($final) ;
	$amount = $final["cou_name"];
	echo $amount;
	$year = $_SESSION['aca_year'];
	echo $year;
	

	$course_strength = $_SESSION['course_strength'];
	print_r($course_strength);
	


?>