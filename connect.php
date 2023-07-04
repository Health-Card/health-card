<?php
if(isset($_POST[['login']])){
    $email=$_POST['email'];
    $password=$_POST['password'];
$host='localhost';
$username='root';
$pass='';
$dbname='mytutor';
$conn=mysqli_connect($host,$username,$pass,$dbname);

$sql="INSERT INTO login(email,password) values('$email','$password')";

mysqli_query($conn,$sql);


}

?>