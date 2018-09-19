<?php
      require("../includes/init.php");
      require("../includes/helpers.php");
      session_start();
      //$username = $_POST['username'];
      //$user_name = test_input($_POST["username"]);
      $username = $_SESSION['username'];
      $last_time = $_SESSION['last_time'];
      echo $username;
      echo "<br>";
      echo $last_time;
      if(isset($_SESSION['last_time'])){
        if((time() - $_SESSION['last_time']) > 10){
          session_destroy();
          header("location: login.php");
        }
      }
      $_SESSION['last_time'] = time();
?>