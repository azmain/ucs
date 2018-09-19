<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_code"];
	

	if($_POST['newname'] && $_POST['oldpassword'] && $_POST['newpassword']){
		$username = $_REQUEST['newname'];
		$oldpass = $_REQUEST['oldpassword'];
		$newpass = $_REQUEST['newpassword'];

		if($username && $oldpass && $newpass){
			if(strlen($newpass) >= 4 ){
				$result = mysqli_query($con,"SELECT * FROM col_login WHERE col_code = '$col_id'");
				$result = mysqli_fetch_array($result);

				if($oldpass == $result['password']){
					$rows = mysqli_query($con,"UPDATE col_login SET username = '$username', password = '$newpass' WHERE col_code = '$col_id'");
					echo "Go";
					header('location: home.php');
					// echo $username;
					// echo $oldpass;
					// echo $newpass;
				}else{
					//echo "Old password doesn't match";
					header('location: update.php');
				}
			}else{
				//echo "Password length mush be minimum 4";
				header('location: update.php');
			}
		}else{
			//echo "Fill the form";
			header('location: update.php');
		}
	}else{
		echo "Come from previous page";
	}

?>