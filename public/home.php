<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();

	if(empty($_SESSION['logged_in'])){
		redirect("index.php");
	}

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

	$msg = '';
	$msgClass = '';

	if(filter_has_var(INPUT_GET, 'submit')){
		if(isset($_GET['submit'])){
			if(empty($_GET['year']) || empty($_GET['options'])){
				// if($_GET['year'] == '0'){
					$msg = 'Please Select Year & Courses';
					$msgClass = 'alert-danger';
				// }
				// if(!empty($_GET['year'])){
				// 	$msg = 'Please Select Courses';
				// }
				
			}else{
				$year = empty($_GET['year']) ? date('Y') : $_GET['year'];
				$_SESSION['aca_year'] = $year;

				$cou_name_arr = $_GET['options'];
				$_SESSION['courses'] = $cou_name_arr;

				header('location: first_year.php');
			}
		}
	}
	

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
	<?php include("links.php"); ?>
	<hr />
	<div class="container">
		<h4>Please Select The Courses Your College Have....</h4>
		<?php if($msg != ''): ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
		<div class="col-md-8 col-md-offset-2 well">
			<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="combo"  onclick="return validate();">
				<div class="form-group" id="course">
		          <label>Select Year</label>
		          <select class="form-control" name="year" method="get" value="year" id="year">
		          	<option value="">--------</option>
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
					<input type="checkbox" name="options[]" value="B.Pharm"> Bachelor of Pharmacy(B.Pharm)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="Pharm D"> Doctor of Pharmacy(Pharm D)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="MBA"> Master of Business Administration(MBA)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="MCA"> Master of Computer Applications(MCA)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="M.Pharm"> Master of Pharmacy(M.Pharm)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="M.Sc"> Master of Science(M.Sc)
				</label>
				<br>
				<label>
					<input type="checkbox" name="options[]" value="Pharm D(PB)"> Doctor of Pharmacy(PB)
				</label>
				<br>
				<button type="submit" class="btn btn-default btn-block btn-primary" name="submit" value="submit">Submit</button>
		</form>
		</div>
	</div>
</body>

<script type="text/javascript">
	
</script>
