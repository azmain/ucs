<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_code"];
	$result = mysqli_query($con,"SELECT * FROM col_login WHERE col_code = '$col_id'");
	$result = mysqli_fetch_array($result);
	//print_r($result['password']);

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
	</div>
	<?php include("links.php"); ?>
	<hr />
	<div class="container " align="center">
		<form method="POST" action="change.php" class="well col-md-8">
		<table class="table table-striped table-bordered table-hover table-condensed">
			<tr>
				<td>Username : </td>
				<td><input class="form-control" type="text" name="newname" placeholder="Type Username" value="<?php echo $result['username']; ?>"></td>
			</tr>

			<tr>
				<td>Old Password : </td>
				<td><input class="form-control" type="password" name="oldpassword" placeholder="Type Old Password" ></td>
			</tr>

			<tr>
				<td>New Password : </td>
				<td><input class="form-control" type="password" name="newpassword" placeholder="Type New Password" ></td>
			</tr>
		</table>
			<p>
			<input class="btn btn-default" type="submit" value="Update & Save" />
			<input type="hidden" name="id" value="<?php echo $result['col_code']; ?>">

		</form>

	</div>
</body>