<?php
	require("../includes/init.php");
	require("../includes/helpers.php");
	session_start();
	$col_id = $_SESSION["col_id"];
	$col_code = $_SESSION["col_code"];
    $cou_code_arr = $_SESSION["array"];
   

    //$year = empty($_GET['year']) ? date('Y') : $_GET['year'];
    //$year = $_SESSION['year'];
    $eng_year = date('Y');

    // foreach ($cou_name_arr as $value) {
    //     # code...
    //     echo $value;
    // }

	// $sql = "SELECT * FROM col_courses WHERE col_id = $col_id";
	// $rows = mysqli_query($con, $sql);
	// $cou_code_arr = [];
	// 	$cou_name_arr = [];
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
	// //print_r($cou_code_arr);	
	// }

//Main Method

if($_SERVER["REQUEST_METHOD"] == "POST")
{
//$i =0;
    $f =0;
    $g =0;
    $course_strength = [];
	foreach($cou_code_arr as $course_code)
	{	
       // echo $course_code . "   ";
        $temp = [];
        //print_r($course_code);
        echo $course_code;
		$course_strength_convener = $course_code."c"; 
		if(!isset($_POST[$course_strength_convener]))
            $g = 1;
            //echo "empty";
            //apologize("Username should not be empty");
         else
        {
            $temp["convener"] = test_input($_POST[$course_strength_convener]);
            $convener = test_input($_POST[$course_strength_convener]);
            // check if email is well formated
            //if (!preg_match("/^[a-zA-Z ]*$/",$program))) {
             // apologize( "Invalid email format");
            //}
        }

        $course_strength_spot = $course_code."s"; 
		if(!isset($_POST[$course_strength_spot]))
            //apologize("Username should not be empty");
            $g =1;
         else
        {
            $spot = test_input($_POST[$course_strength_spot]);
            $temp["spot"] =$spot;
            // check if email is well formated
            //if (!preg_match("/^[a-zA-Z ]*$/",$program))) {
             // apologize( "Invalid email format");
            //}
        }

        $course_strength_management = $course_code."m"; 
		if(!isset($_POST[$course_strength_management]))
            //apologize("Username should not be empty");
            //echo "empty";
            $g =1;
         else
        {
            $management = test_input($_POST[$course_strength_management]);
            $temp["management"] =$management;
            // check if email is well formated
            //if (!preg_match("/^[a-zA-Z ]*$/",$program))) {
             // apologize( "Invalid email format");
            //}
        }
        if($g == 0)
        {
            $course_strength[$course_code] = $temp;
            
       }
       else 
        echo "empty";
        //$i++;
    }//end of foreach
   // var_dump($course_strength);
    //var_dump($cou_code_arr);
    $_SESSION["course_strength"] = $course_strength;
           header("location: view.php");


    if($f == 0)
    {
        echo "data is stored. temporarily finished";
    }    
}

?>