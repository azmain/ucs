<PART OF HOME_ADMIN FIRST >
<?php 
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$year = empty($_GET['year']) ? date('Y') : $_GET['year'];
	$col_id = $_SESSION["col_id"];
	$sql = "SELECT * from first_year";
	$rows = mysqli_query($con,$sql);
	if($rows)
	{
		$course_ids = [];
		$conveners = [];
		//$course_name = [];
		foreach($rows as $row)
		{
			$course_ids[] = $row["id"];
			//$course_names[] = $row["cou_name"];
			$conveners[] = $row["convener"];
		}
	}
	else echo "error";

?>