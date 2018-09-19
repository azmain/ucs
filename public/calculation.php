<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_id"];
	$col_code = $_SESSION["col_code"];
	$pay_amount = $_POST["pay_amount"];
	$eng_year = date('Y');
	$total_amount = 0;
	$sql = "SELECT * from first_year WHERE col_code = '$col_code' AND eng_year = '$eng_year'";
	$rows = mysqli_query($con,$sql);
	if($rows)
	{
		$course_ids = [];
		//$course_name = [];
		$amounts = [];
		foreach($rows as $row)
		{
			$course_ids[] = $row["id"];
			//$course_name[] = $row["cou_name"];
			$amounts[] = $row["actual_pay"];
		}
	}
	else echo "error";

	foreach ($amounts as $amount) {
		$total_amount = $total_amount + $amount;
	}
	//echo $total_amount;
	//echo $pay_amount;
	$due = $total_amount - $pay_amount;
	//echo $due;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$sql = "INSERT INTO balance(col_id,actual_pay,paid,due,year)
        values('$col_code','$total_amount','$pay_amount','$due','$eng_year')";
        if(!mysqli_query($con,$sql))
        {
        	$f = 1; 
            echo "error";
        }
        else
			header("location: logged.php");
	}

?>