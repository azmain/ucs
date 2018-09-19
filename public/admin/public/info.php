<?php 
    require("../includes/helpers.php");
    require("../includes/init.php");

     //timeout session
    if(isset($_SESSION['last_time'])){
      $diff = time() - $_SESSION['last_time'];
      if($diff > 60){
        session_destroy();
        header("location: login.php");
      }
    }
    $_SESSION['timeout'] = time();
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
  <hr />
  <!-- BUTTONS -->
  <div class="container pull-right">
    <form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF']?>">
      
      <div class="form-group pull-right">
        <a href="login.php" class="btn btn-default pull-right" role="button">Logout</a>&nbsp
      </div>
      
      <div class="form-group pull-right">
        <a href="home_admin.php" class="btn btn-default pull-right" role="button">Home</a>
      </div>
      
    </form>
  </div>
  <br>
  <br>
  <hr />

  <div class="container lead">
    <div class="form-group ">
      <p class="lead">College Name : <?php echo $_REQUEST['names'];?></p>
    </div>
    <div class="row">
      <div class="form-group col-md-4">
        <p>College District: <?php echo $_REQUEST['districts'];?></p>
      </div>
      <div class="form-group col-md-4">
        <p>College Id : <?php echo $_REQUEST['ids'];?></p>
      </div>
    </div>
  </div>

</body>