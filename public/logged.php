<?php 
	require("../includes/init.php");
	//require("../includes/helpers.php");
	//session_start();
	$sql = "SELECT * from course";
	$rows = mysqli_query($con,$sql);
	if($rows)
	{
		$course_ids = [];
		$course_name = [];
		foreach($rows as $row)
		{
			$course_ids[] = $row["id"];
			$course_name[] = $row["cou_name"];
		}
	}
	else echo "error";

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
		<h4>Please Select The Courses Your College Have....</h4>
		<div class="col-md-8 col-md-offset-2">
			<form method="get" action="first_year.php" class="well">
				<div class="form-group" name="year">
		          <label>Select Year</label>
		          <select class="form-control" name="year" method="get" value="year" id="year">
		          	<option value="null">--------</option>
		            <option value="II Year">Second Year</option>
		            <option value="III Year">Third Year</option>
		            <option value="IV Year">Final Year</option>
		          </select>
		        </div>
				<label>
					<input type="checkbox" name="options[]" value="B.Tech"> Bachelor Of Technology(B.Tech)
				</label>
				<br />
				<label>
					<input type="checkbox" name="options[]" value="M.Tech"> Master of Technology(M.Tech)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="BBA"> Bachelor of Business Administration(BBA)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="MBA"> Master of Business Administration(MBA)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="MCA"> Master of Computer Application(MCA)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="M.Pharm"> Master of Pharmacy(M.Pharm)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="PhD"> Doctorate of Philosophy(PhD)
				</label>
				<br>
				<button type="submit" class="btn btn-default btn-block" value="submit">Submit</button>
		</form>
		</div>
	</div>
</body>