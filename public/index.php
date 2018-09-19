<?php 
    require("../includes/helpers.php");
    require("../includes/init.php");
    session_set_cookie_params(0);
    session_start();

 ?>

<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>

        <link href="css/styles.css" rel="stylesheet"/>


        <!-- https://jquery.com/ -->
        <script src="js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div >
            <br>
                    <a href="/"><img src="img/logo.png"/></a>
                </div>




<form class = "form" method = "POST" action = "<?= $_SERVER['PHP_SELF']?>">
 <fieldset>
    
	 <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
	<div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="password" placeholder="password" type="password"/>
        </div>
	
	<div class="form-group">
            <button class="btn btn-default" type="submit">
                Login
            </button>
        </div>
    </fieldset>
</form>

            </div>

            <div id="bottom">
                <!--Brought to you by the number <a href="http://cdn.cs50.net/2015/fall/psets/7/pset7/pset7.html">7</a>.-->
            </div>

        </div>

    </body>

</html>
<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
            apologize("Username should not be empty");
         else
        {
            $user_name = test_input($_POST["username"]);
            // check if email is well formated
            //if (!preg_match("/^[a-zA-Z ]*$/",$program))) {
             // apologize( "Invalid email format");
            //}
        }

        if(empty($_POST["password"]))
            apologize(" password should not be empty");
        else
        {
            $password = test_input($_POST["password"]);
            // check if email is well formated
            //if (!preg_match("/^[a-zA-Z ]*$/",$program))) {
             // apologize( "Invalid email format");
            //}
        }

        $sql = "SELECT  * FROM col_login  WHERE username = '".$user_name."'";
    $rows = mysqli_query($con , $sql);
    if(count($rows) == 1)
    {
        $row = mysqli_fetch_array($rows);
        //echo $row["password"];
        //$row = $rows[0];
            if($password == $row["password"])
            {

                //if($opt ==  "principal")
                $_SESSION["col_code"] = $row["col_code"];
                $_SESSION["col_id"] = $row["id"];
                //else $_SESSION["admin_id"] = $row["id"];
                //echo $_SESSION["col_code"];
                $_SESSION['logged_in'] = true;

                redirect("home.php"); 
            }
            else echo "error2";
    
    }
    else echo "error1";
    }    

?>