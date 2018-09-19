<?php 
	require("../includes/init.php");
	//require("../includes/helpers.php");
	session_start();
	
	if(empty($_SESSION['logged_in'])){
		redirect("index.php");
	}

	$col_id = $_SESSION["col_id"];
	//$sql = "SELECT * FROM col_courses WHERE col_id = $col_id";
	//$rows = mysqli_query($con, $sql);
	
	//getting the courses from html combo list
	// $cou_name_arr = $_GET["options"];
	$cou_name_arr = $_SESSION['courses'];

	//fetching course code from data table
	$cou_code_arr = [];
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

	//get year & save some sessions for further use
	// $year = empty($_GET['year']) ? date('Y') : $_GET['year'];
	$year = $_SESSION['aca_year'];
	$_SESSION['array'] = $cou_code_arr;
	// $_SESSION['aca_year'] = $year;
	//echo $year;
	// if($rows)
	// {
	// 	$cou_code_arr = [];
	// 	$cou_name_arr = [];
	// 	foreach( $rows as $row) 
	// 	{
	// 		//print_r($row);
	// 		$cou_id = $row["cou_id"];
	// 		$sql = "SELECT * FROM course WHERE id = '$cou_id'";
	// 		$tupples = mysqli_query($con, $sql);
	// 		if($tupples)
	// 		{
	// 			$tupple = mysqli_fetch_array($tupples);
	// 			$cou_code_arr[] = $tupple["cou_code"];
	// 			$cou_name_arr[] = $tupple["cou_name"];
	// 		}
	// 	}
	// 	//print_r($cou_name_arr);	
	// }

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
		<form method = "post" action ="first_check.php" >
		  <div class="form-group">
		    <label for="exampleInputEmail1">College Address</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="College Address">
		  </div>
		  <div class="row">
			  <div class="form-group col-md-4">
			    <label for="exampleInputEmail1">Principal Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Principal Name">
			  </div>
			  <div class="form-group col-md-4">
			    <label for="exampleInputEmail1">College Code</label>
			    <?php $col_code = $_SESSION["col_code"]; ?>
			    <input type="text" class="form-control" id="exampleInputEmail1"  value = <?php echo $col_code ;?> disabled="disabled">
			  </div>
		  </div>
		  <h3><?php print($year); ?></h3>
		  <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Course</th>
		        <th>Convener</th>
		        <th>Spot</th>
		        <th>Management</th>
		        
		      </tr>
		    </thead>
		    <tbody>
		    	<?php $i =0; foreach ($cou_name_arr as $cou_name): ?>
		      <tr>
		        <td><?= $cou_name?></td>
		        <td><input type="number" class="form-control check" min="0" name = <?= $cou_code_arr[$i] ."c" ;?>  id=<?= $cou_code_arr[$i] ."c" ;?>></td>
		        <td><input type="number" class="form-control check" min="0" name = <?= $cou_code_arr[$i]."s";?> id=<?= $cou_code_arr[$i] ."s" ;?>></td>
		        <td><input type="number" class="form-control check" min="0" name = <?= $cou_code_arr[$i]."m";?> id=<?= $cou_code_arr[$i] ."m" ;?>></td>
		        
		      </tr>
		      <?php $i++; endforeach?>
		     
		      <!-- <tr>
		        <td>Total</td>
		        <td><label id = "tconvener"> </label></td>
		        <td><label id= "tspot"> </label></td>
		        <td><label id = "tmanagement"> </label></td>
		        <td><label id = "total"> </label></td>
		      </tr> -->
		    </tbody>
		  </table>
		  <h4 class="totals">Total Strength : <span id="sum"></span></h4>
		  <!--
		  <h3>Total Amount: <span id="total-amount"></span></h3>
		  -->
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
<script>
	document.getElementById()
</script>
<script type="text/javascript" src="js/total.js"></script>
</body>
</html>

<!-- 		      
<h3>University common services:</h3>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> AICTE Approval (Latest)
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> JNTU Affliation Letter (2016-17)
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Convener List
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Spot List
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Admission list approved by Convener PGCET 2016
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> NRI/Management quota list approved by Convener PGCET 2016 & APSCHE
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Soft copy (Hall ticket number list format)
		    </label>
		  </div>
		   -->