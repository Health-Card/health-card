<?php
if(isset($_POST["first_name"])){
$server="localhost";
$username="root";
$password="";

$con = mysqli_connect($server, $username, $password);

if(!$con)
{
    die("connection to this database failed due to" . mysqli_connect_error());
}
$selected = mysqli_select_db($con,'healthcard');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$adhar_no = $_POST['adhar_no'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$sql= "INSERT INTO `signup` ( `first_name`, `last_name`, `adhar_no`, `password`, `confirm_password`, `date`) VALUES ('$first_name', '$last_name', '$adhar_no', '$password', '$confirm_password', current_timestamp())";

if($con->query($sql)==true){
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();}
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="SignUp_login.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body{
      background-image: url(health-card.webp);
    }
  </style>
  <title>sign up / login form</title>
</head>
<body >
    <script src="SignUp_Login.js"></script>
  <div class="wrapper">
    <div class="modelForm">
      <div class="actionBtns">
            <Button class="actonBtn signupBtn">Signup</Button>
            <Button class="actonBtn loginBtn">Login</Button>
            <Button class="moveBtn">Signup</Button>
      </div>
        <div class="userForm">
          <form action="signuplogin.php" method="post" class="form signup singupForm">
            <div class="inputGroup">
              <input type="text" name="first_name" id="first_name" placeholder="First Name" autocomplete="off">
            </div>
            <div class="inputGroup">
              <input type="text" name="last_name" id="last_name" placeholder="Last Name" autocomplete="off">
            </div>
            <div class="inputGroup">
              <input type="number" name="adhar_no" id="adhar_no" placeholder="Adhar Card Number" autocomplete="off">
            </div>
            <div class="inputGroup">
              <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
            </div>
            <div class="inputGroup">
              <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm Password" autocomplete="off">
            </div>
            <button type="submit" class="submitBtn">Signup</button>
            <?php
            if($insert==true){
                echo "<p class="submitting">Signup Succesfull ! </P>";
            }
            ?>
          </form>
        
          <form action="" class="form login">
            <div class="inputGroup">
              <input type="text" placeholder="Adhar Number" autocomplete="off">
            </div>
            <div class="inputGroup">
              <input type="password" placeholder="Password" autocomplete="off">
            </div>
            <button type="submit" class="submitBtn">Login</button>
          </form>
        
        </div>
    </div>
  </div>

</body>
</html>

