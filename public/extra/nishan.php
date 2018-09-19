<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_id"];
	$col_code = $_SESSION["col_code"];
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
	// $sql = "INSERT INTO balance(col_id,actual_pay,year)
 //             values('$col_code','$total_amount','$eng_year')";
 //           // header("location: nishan.php");
 //            if(!mysqli_query($con,$sql))
 //            {
 //        	    $f = 1; 
 //                echo "error";

 //            }
	// //echo $total_amount;

?>

<DOCUMENT HTML>
<head>
	<title>UCS FEE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script
			  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
		
</head>
<body>
	<div class="container">
		<div class="header">
			<h3>JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY, ANANTAPUR</h3>
			<h3>ANANTHAPURAMU - 515002(A.P.)</h3>
		</div>
		<!-- <div>
			<h6>Check the courses that your college has?<h6>
			<div class="form-group">
				<?php for($i =0; $i < count($course_ids); $i++ ):?>			
            		<input autocomplete="off" name=<?= $course_ids[$i]?> type="checkbox"/><?= $course_name[$i]?>
        		<?php endfor?>
        	</div>

		</div> -->
	</div>
	<hr />
	<div class="container">
		<h4>Please Pay The Amount...</h4>
		<br><br>
		<div class="col-md-8 col-md-offset-2">
			<form method="post" action="calculation.php" class="well">
				<div class="form-group">
		          <label>Total Amount</label>
		          <div class="alert alert-info" role"alert"><?php echo $total_amount; ?></div>
		          <!-- <input type="text" class="form-control" placeholder="<?php echo $total_amount; ?>" disabled="disabled" border: 2px solid red;> -->
		        </div>

		        <div class="form-group">
		          <label>How Much Would You Like To Pay?</label>
		          <input type="text" class="form-control" placeholder="Type Amount" name="pay_amount">
		        </div>

				<button type="submit" class="btn btn-default btn-block" value="submit">Submit</button>
			</form>
		</div>
	</div>
</body>
