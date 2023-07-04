<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $a=$_POST['fname'];
    $b=$_POST['lname'];
    $c=$_POST['email'];
    $d=$_POST['pass'];
    $e=$_POST['age'];
    $f=$_POST['type'];
    $g=$_POST['bio'];

    //$qry=mysqli_query("INSERT INTO doctor(email,password) VALUES('$a','$b')");

    $qry=mysqli_query($conn,"INSERT INTO register(f_name,l_name,email,password,age,type,bio) 
    VALUES('$a','$b','$c','$d','$e','$f','$g')");

    


    if($qry==true)
    {
        echo "inserted";
    }
    else{
        echo "not inserted" .mysqli_error();
    }
}
?>