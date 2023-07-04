<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $a=$_POST['email'];
    $b=$_POST['passw'];

    //$qry=mysqli_query("INSERT INTO doctor(email,password) VALUES('$a','$b')");

    $qry=mysqli_query($conn,"INSERT INTO doctor(email,password) VALUES('$a','$b')");

    if($qry==true)
    {
        echo "inserted";
    }
    else{
        echo "not inserted" .mysqli_error();
    }
}
?>