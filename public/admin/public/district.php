<?php 
  require("../includes/init.php");
  require("../includes/helpers.php");
  session_start();
  $year = empty($_GET['year']) ? date('Y') : $_GET['year'];
  $username = $_SESSION['username'];
  $sql = "SELECT * from colleges";
  $rows = mysqli_query($con,$sql);
  $sql2 = "SELECT * from first_year";

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
        <div class="form-group" name="district">
            <label>Select District</label>
            <select class="form-control" name="district" value="district" id="district">
              <option value="null">--------</option>
              <option value="ATP">ANANTAPUR</option>
              <option value="CTR">CHITTOR</option>
              <option value="KDP">KADAPA</option>
              <option value="KNL">KURNOOL</option>
              <option value="NLR">NELLORE</option>
            </select>
        </div>
        <input class="form-control" type="submit" name="submit" value="Search By District" />
        <!-- <button type="submit" class="btn btn-default" name="submit">Search By District</button> -->
        
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

    <!-- TABLES -->
    <div class="container">
      
        <?php
          
          if(isset($_REQUEST['submit'])){
            echo "<table class=\"table table-striped table-bordered table-hover table-condensed\">
              <tr class=\"info\">
                <th>Serial No</th>
                <th>College Code</th>
                <th>College Name</th>
                <th>District</th>
              </tr>";

               $search = empty($_POST['district'])? NULL : $_POST['district'];
              // echo $search;
              // echo "By Value";
               $sql = "SELECT * from colleges WHERE col_district = '$search'";
               $rows = mysqli_query($con,$sql);

               $i = 1;

               if($rows){
                while($row = mysqli_fetch_array($rows)){
                  
                  $sl = $i++;
                  $id = $row['col_code'];
                  $name = $row['col_name'];
                  $district = $row['col_district'];
                  echo "<tr>
                  <td>$sl</td>
                  <td><a href=\"info.php?ids=$id\">$id</a></td>
                  <td>$name</td>
                  <td>$district</td>
                  </tr>";
                }
               }
               else{
                echo "No Results Found";
               }

              echo "</table>";
          }
          else{
            echo "Select a District!"."<br>";
          }
        ?>
    </div>

</body>

