<?php
include("config.php");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $a=$_POST['mess'];
    $b=$_POST['name'];
    $c=$_POST['email'];

    //$qry=mysqli_query("INSERT INTO doctor(email,password) VALUES('$a','$b')");

    $qry=mysqli_query($conn,"INSERT INTO contact(message,Name,Email) VALUES('$a','$b','$c')");

    if($qry==true)
    {
        echo "inserted";
    }
    else{
        echo "not inserted" .mysqli_error();
    }
}
?>