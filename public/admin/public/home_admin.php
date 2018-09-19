<?php
      require("../includes/init.php");
      require("../includes/helpers.php");
      session_start();

      if($_SESSION['status']!="Active")
      {
          header("location:login.php");
      }
      echo $_SESSION['status'];

      if(!isset($_SESSION['username'])){
        header('location: login.php');
      }
      else{
        $year = empty($_GET['year']) ? date('Y') : $_GET['year'];
      //$user = $_SESSION["col_id"];
      // $_SESSION['username'] = $_GET["username"];
        $username = $_SESSION['username'];

      // if($_SERVER["REQUEST_METHOD"] != "POST"){
      //   header("location: login.php");
      // }

      //retrieve colleges
        $sql = "SELECT * from colleges";
        $rows = mysqli_query($con,$sql);
      //$rows = mysql_query($con,$sql) or die(mysql_error());

      //retrive from first_year
        $sql2 = "SELECT * from first_year";


        if(isset($_SESSION['last_time'])){
          $diff = time() - $_SESSION['last_time'];
          if($diff > 60){
            session_destroy();
            header("location: login.php");
          }
        }
        $_SESSION['timeout'] = time();
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
	<hr />

	<!-- BUTTONS -->
    <div class="container pull-right">
      <form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF']?>">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
        
        <div class="form-group">
          <a href="district.php" class="btn btn-default pull-right" role="button">Search By District</a>
        </div>
        <div class="form-group">
          <a href="college.php" class="btn btn-default pull-right" role="button">Add College</a>
        </div>
        <div class="form-group pull-right">
          <a href="login.php" class="btn btn-default pull-right" role="button">Logout</a>
        </div>
      </form>
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

        	if($rows){
        		while($row = mysqli_fetch_array($rows)){
	        		$sl = $row['id'];
              $id = $row['col_code'];
              $name = $row['col_name'];
              $district = $row['col_district'];
	        		echo "<tr>
              <td>$sl</td>
              <td><a href=\"info.php?ids=$id&names=$name&districts=$district\">$id</a></td>
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