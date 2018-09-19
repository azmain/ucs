


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

	<!-- BUTTONS -->
    <div class="container">
      <a href="login.php" class="btn btn-default pull-right" role="button">Login</a>
    </div>
    <br>

	 <!-- TABLES -->
    <div class="container">
      <table class="table table-striped table-bordered table-hover table-condensed">
        <tr class="info">
          <th>Serial No</th>
          <th>College Code</th>
          <th>College Name</th>
          <th>District</th>
          <!-- <th>Course Code</th>
          <th>Academic Session</th>
          <th>Convener</th>
          <th>Spot</th>
          <th>Management</th>
          <th>Total Amount</th>
          <th>Paid</th>
          <th>Due</th>
          <th>Year</th> -->
        </tr>

        <?php

        	require("../includes/init.php");
    			require("../includes/helpers.php");
    			session_start();
    			$year = empty($_GET['year']) ? date('Y') : $_GET['year'];
    			//$col_id = $_SESSION["col_id"];

        	$sql = "SELECT * from colleges";
        	$rows = mysqli_query($con,$sql);
        	//$rows = mysql_query($con,$sql) or die(mysql_error());
        	if($rows){
        		while($row = mysqli_fetch_array($rows)){
              $sl = $row['id'];
	        		$id = $row['col_code'];
              $name = $row['col_name'];
              $district = $row['col_district'];
	        		// //$name = $row[''];
	        		// $course = $row['cou_code'];
	        		// $sesson = $row['year'];
	        		// $convener = $row['convener'];
	        		// $spot = $row['spot'];
	        		// $management = $row['management'];
	        		echo "<tr>
							<td>$sl</td>
							<td>$id</td>
							<td>$name</td>
							<td>$district</td>
						  </tr>";
        			}
        	}else{
        		echo "ERROR";
        	}
        	


        ?>

<!--         <tr class="danger">
          <td>Azmain</td>
          <td>Nishan</td>
          <td>21</td>
          <td>21</td>
          <td>='<? foreach ($conveners as $convener) {
          	# code...
          	echo $conveners[$convener] ;
          } ?>'</td>
          <td>21</td>
          <td>21</td>
          <td>21</td>
          <td>21</td>
          <td>21</td>
          <td><input type="text" class="form-control check" name = <? foreach ($conveners as $convener) {
          	# code...
          	echo $conveners[$convener] ;
          } ?>></td>
        </tr> -->
        
      </table>  
    </div>

</body>