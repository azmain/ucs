<?php 
	require("../includes/init.php");
	//require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_id"];
	//$sql = "SELECT * FROM col_courses WHERE col_id = $col_id";
	//$rows = mysqli_query($con, $sql);
	$cou_code_arr = ["A","D","F","E","F","G","H","I"];
	//$cou_name_arr = ["B Tech","M Teach","MCA", "MBA"];
	//nishan
	$cou_name_arr = $_GET['options'];
	// for($i = 0; $i < count($checked); $i++){
 //    	//echo "Selected " . $checked[$i] . "<br/>";
 //    	array_push($cou_name_arr, $options[$i]);
	// }
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
		  <h3>I Year</h3>
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
		    	<?php $i = 0; foreach ($cou_name_arr as $cou_name): ?>
		      <tr>
		        <td><?= $cou_name?></td>
		        <td><input type="text" class="form-control check" name = <?= $cou_code_arr[$i] ."c" ;?>   id=<?= $cou_code_arr[$i] ."c" ;?>></td>
		        <td><input type="text" class="form-control check" name = <?= $cou_code_arr[$i]."s";?> id=<?= $cou_code_arr[$i] ."s" ;?>></td>
		        <td><input type="text" class="form-control check" name = <?= $cou_code_arr[$i]."m";?> id=<?= $cou_code_arr[$i] ."m" ;?>></td>
		 
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
		  <h4 class="totals">Total Strength <span id="sum"></span></h4>
		  <h3>Total Amount: <span id="total-amount"></span></h3>
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