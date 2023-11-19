<?php
ob_start();
session_start();
include_once('database.php');
$em=$_GET['em'];
$pass=$_GET['pass'];
$sql1="SELECT * FROM userdetails WHERE Email='$em'";
$sql2="SELECT * FROM userdetails WHERE Email='$em' AND Password='$pass'";
// $sql3="SELECT * FROM userdetails WHERE Email='$em' AND Password='$pass'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
    $result2=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result2)>0){
        $_SESSION['Email']=$em;
        echo 1;
    }
    else{
        echo "INCORRECT PASSWORD";
    }
    
}
else{
    echo "USER DOESN'T EXIST";
}
?>