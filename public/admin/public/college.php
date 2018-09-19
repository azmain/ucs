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

  <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-md-offset-0">
            <form id="login" method="POST" action="home_admin.php" onsubmit="return Validate()" class="well" name="vForm">

              <div class="form-group">
                <label>College Code</label>
                <input type="text" id="name" class="form-control" placeholder="Enter College Code" name="name">
                <div class="value_error" id="name_error"></div>
              </div>
              <div class="form-group">
                <label>College Name</label>
                <input type="text" class="form-control" placeholder="Enter College Name" name="cname" id="cname">
                <div class="value_error" id="cname_error"></div>
              </div>
              <div class="form-group" >
                <label>District</label>
                <input type="text" class="form-control" placeholder="Enter College District" name="district" id="district">
                <div class="value_error" id="district_error"></div>
              </div>
              <div>
                <input type="submit" class="btn btn-default btn-block" name="register" value="Add College">
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
</body>

<script type="text/javascript">

  var username = document.forms["vForm"]["name"];
  var cname = document.forms["vForm"]["cname"];
  var district = document.forms["vForm"]["district"];
  
  // GETTING ALL ERROR OBJECTS
  var name_error = document.getElementById("name_error");
  var cname_error = document.getElementById("cname_error");
  var district_error = document.getElementById("district_error");

  // SETTING ALL EVENT LISTENERS
  username.addEventListener("blur", nameVerify, true);
  cname.addEventListener("blur", cnameVerify, true);
  district.addEventListener("blur", districtVerify, true);
  //username.addEventListener("blur", nameVerify, true);
  function Validate(){
    // VALIDATE USERNAME
    if(username.value == ""){
      name_error.textContent = "College Code is required";
      username.style.border = "1px solid red";
      username.focus();
      return false;
    }
    //VALIDATE COLLEGE NAME
    if(cname.value == ""){
      cname_error.textContent = "College name is required";
      cname.style.border = "1px solid red";
      cname.focus();
      return false;
    }
    // VALIDATE EMAIL
    if(district.value == ""){
      district_error.textContent = "District name is required";
      district.style.border = "1px solid red";
      district.focus();
      return false;
    }
  }
 // ADD EVENT LISTENERS
  function nameVerify(){
    if (username.value != "") {
      name_error.innerHTML = "";
      username.style.border = "1px solid #110E0F";
      return true;
    }
  }
  function cnameVerify(){
    if (cname.value != "") {
      cname_error.innerHTML = "";
      cname.style.border = "1px solid #110E0F";
      return true;
    }
  }
  function districtVerify(){
    if (district.value != "") {
      district_error.innerHTML = "";
      district.style.border = "1px solid #110E0F";
      return true;
    }
  }

</script>