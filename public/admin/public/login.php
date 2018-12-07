<?php 
    require("../includes/helpers.php");
    require("../includes/init.php");

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

  <div class="container">
      <form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF']?>">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
      </form>
  </div>
</body>

<?php 
    session_start();
    $_SESSION['status'] = "Idle";
    //echo $_SESSION['status'];

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
        //echo $_SESSION['status'];

    //     $sql = "SELECT  * FROM col_login  WHERE username = '".$user_name."'";
    // $rows = mysqli_query($con , $sql);
    // if(count($rows) == 1)
    // {
    //     $row = mysqli_fetch_array($rows);
    //     //echo $row["password"];
    //     //$row = $rows[0];
    //         if($password == $row["password"])
    //         {

    //             //if($opt ==  "principal")
    //             $_SESSION["col_code"] = $row["col_code"];
    //             $_SESSION["col_id"] = $row["id"];
    //             //else $_SESSION["admin_id"] = $row["id"];
    //             //echo $_SESSION["col_code"];

    //             redirect("home.php"); 
    //         }
    //         else echo "error2";
    
    // }
    // else echo "error1";
    // }  
        //echo $password;
        if($user_name == 'admin' && $password == 'admin') {
          //echo "Home";
          session_set_cookie_params(0);
          session_start();
          echo $_SESSION['status'];
          $_SESSION['last_time'] = time(); //timing logout
          $_SESSION['username'] = test_input($_POST["username"]);
          $_SESSION['status']="Active";
          redirect("home_admin.php");
        } else{
          echo "You are not Admin";
        }
  }

?>