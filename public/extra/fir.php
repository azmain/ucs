<?php 
	require("../includes/init.php");
	//require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_id"];
	//$sql = "SELECT * FROM col_courses WHERE col_id = $col_id";
	//$rows = mysqli_query($con, $sql);
	$cou_code_arr = ["A","D","F","E","G","H","I"];
	//$cou_name_arr = ["B Tech","M Teach","MCA", "MBA"];
	//nishan
	//$cou_name_arr = array();
	
	
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
		  <h3>I Year</h3>
		  <hr/>
		  <?php
		  	$checked = $_GET['options'];
		  	for($i = 0; $i < count($checked); $i++){
    		echo "Selected " . $checked[$i] . "<br/>";
    		//array_push($cou_name_arr, $options[$i]);
			}
		  ?>
		  <hr/>
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
		    	<?php $i = 0; for($i = 0; $i < count($checked); $i++){ ?>
		      <tr>
		        <td><?= $checked[$i]?></td>
		        <td><input type="text" class="form-control check" name = <?= $checked[$i] ."c" ;?>   id=<?= $cou_code_arr[$i] ."c" ;?>></td>
		      </tr>
		      <?php }?>
		    </tbody>
		  </table>
		  
	</div>
<script>
	document.getElementById()
</script>
<script type="text/javascript" src="js/total.js"></script>
</body>
</html>