<?php
ob_start();
session_start();
include_once('database.php');
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$em=$_GET['em'];
$pass=$_GET['pass'];
$conpass=$_GET['conpass'];
$con=$_GET['con'];

$sta=$_GET['sta'];
$chk="SELECT * FROM userdetails WHERE Email='$em'";
$sql="INSERT INTO userdetails(FirstName,LastName,Contact,Email,Password,State) VALUES('$fn','$ln','$con','$em','$pass','$sta')";
$result=mysqli_query($conn,$chk);
if(mysqli_num_rows($result)>0){
    echo "User Already exists.Please log in";
}
else{
    if(mysqli_query($conn,$sql)){
        $_SESSION['Email']=$em;
        echo 1;
        }
        else{
        echo "Something went wrong!!!";    
        }

}

?>