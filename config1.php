<?php
define("server","localhost");
define("username","root");
define("password","");
define("dbname","miniproject");
$conn=mysqli_connect(server,username,password) OR die(mysqli_error());
mysqli_select_db($conn,dbname) OR die(mysqli_error());

?>