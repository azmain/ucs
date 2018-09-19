<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_code"];
	
	
	//echo $col_id;
	$year = $_SESSION['aca_year'];
    $eng_year = date('Y');

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
		
			<h2>Clearance for the candidates admitted in Courses</h2>
		</div>
		<?php include("links.php"); ?>
		<hr />
		<form method = "post" action ="payment.php" >
		  <div class="form-group">
		    <label for="exampleInputEmail1">College Address</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="College Address" disabled="disabled">
		  </div>
		  <div class="row">
			  <div class="form-group col-md-4">
			    <label for="exampleInputEmail1">Principal Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Principal Name" disabled="disabled">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="exampleInputEmail1">College Code</label>
			    <?php $col_code = $_SESSION["col_code"]; ?>
			    <input type="text" class="form-control" id="exampleInputEmail1"  value = <?php echo $col_code ;?> disabled="disabled">
			  </div>
		  </div>
		  <h3>Year : <?php print($year); ?></h3>

		  <table class="table table-striped table-bordered table-hover table-condensed">
	        <tr class="success">
	          <th>Serial No.</th>
	          <th>Date</th>
	          <th>Course & Year</th>
	          <th>No. of Students</th>
	          <th>Amount</th>
	          <th>Payment</th>
	        </tr>
	        <?php
				$cou_code_array = $_SESSION['array'];
				$course_strength = $_SESSION["course_strength"];
				//var_dump($course_strength);
				//var_dump($_SESSION);

				$year = $_SESSION['aca_year'];
				$date = date('d/m/Y');
				//echo $year;
				//print_r($course_strength);
				$i = 1; 
				//print_r($cou_code_array);
				//var_dump($cou_code_array);
				 foreach ($cou_code_array as $code) {
				// 	# code...
				 	//retirving course by course code
				 	//echo $code;

				 	$course = mysqli_query($con,"SELECT cou_name FROM course WHERE cou_code = '$code'");
				 	$course = mysqli_fetch_array($course);
				 	$course = $course['cou_name']." ".$year;
				 	//calculating total number of students for each course
					$temp = $course_strength[$code]["spot"] + $course_strength[$code]["convener"] + $course_strength[$code]["management"]; 
					//retriving amount from fees database
					$amount = mysqli_query($con,"SELECT amount FROM fees WHERE cou_code = '$code'");
					$amount = mysqli_fetch_array($amount);
					$amount = $amount['amount'];
					$total = $temp * $amount;
					//making string of strength
					$strength = $temp."<br>"."(@".$amount.")";
			    	echo "<tr>
			    			<td>$i</td>
							<td>$date</td>
			    			<td>$course</td>
			    			<td>$strength</td>
			    			<td id='tot'.$i>$total</td>
			    			<td><input class='form-control check' type='number' min='0' name='$code' placeholder='Enter Amount' /></td>
			    		</tr>";					
			    	$i++;
				 }
				 //print_r($cou_code_array);

		    ?>
	      </table>
		  
	      <h4 class="totals text-right">Total Amount : <span id="sum"></span></h4>

		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<br>
	<br>
<script>
	document.getElementById()
</script>
<script type="text/javascript" src="js/total.js"></script>
</body>
</html>
