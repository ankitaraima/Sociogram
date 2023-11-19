<?php
ob_start();
session_start();
if(isset($_SESSION['Email'])){
  header("Location:Home.php");
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<style>
  
body{
    padding: 0;
    margin: 0;
    background-image: url("wallpaper.jpg");
    
}
#main{
height: 100vh;
width: 100vw;
text-align: center;
background-color:#3233318f;
}
#data{
    display: inline-block;
    margin: 2rem auto 1rem auto;
    padding: 3px;
    background-color: #8ebf42;
    width:60vh;
    border-radius: 20px;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.582);

}
#SignUp{
  /* display: inline-block; */
    margin:  auto;
    padding: 3px;
    background-color: #8ebf42;
    width:60vh;
    border-radius: 20px;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.582);
}
.SignUp{
  margin:1rem;
  color:white;
  font-weight:bold;
}
#logo{
    font-size: 50px;
    font-family: 'Dancing Script', cursive;
    /* font-family: 'Pixelify Sans', cursive; */
    font-weight: bold;
    color: white;
    margin:2rem 0;


}
.btn-primary,.btn-primary:active, .btn-primary:visited {
    background-color: white !important;
    color:#8ebf42 !important; 
    font-weight: bold !important;
    border: #8ebf42 !important;
}
.btn-primary:hover {
    background-color: #63a500 !important;
    color:white !important; 
    box-shadow:  3px 2px 4px rgba(0, 0, 0, 0.582) !important;
}
.form-control:focus {
    border-color: #8ebf42 !important; 
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(253, 249, 249, 0.6) !important;
  }
  form{
    
  }
  #forget{
       text-align: left;
       margin-left:0.5px;
       margin-bottom:2rem;
      
  }
  .fa{
  position:relative;
  top:-30px;
  left:140px;
  margin-bottom:0;
  color:rgba(0,0,0,0.240);
  cursor:pointer;
}
  a:hover{
       text-align: left;
       margin-left:0.5px;
       margin-bottom:2rem;
       color:white;
      
  }
  a{
    color:white;
    font-weight:bold;
  }
  button{
    width:15rem;

   
  }
  #txtHint{
    color:red;
    font-weight:bold;
  }
</style>
<body>
    <div id="main">
        <div id="data">
            <p id="logo">Let's Connect</p>
            <form class="form mr-2 ml-2 pr-2 pl-2 " >
  <div class="form-group mb-2">
 
    <input type="email" class="form-control " id="em"  aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  
  <div class="form-group mb-0">

    <input type="password" class="form-control" id="pass" placeholder="Password">
    <i class="fa fa-eye-slash mb-0" aria-hidden="true" id="pf" onclick="show1()"></i>
  </div>
  <div id="forget"><a href="">Forget Password?</a><br></div>
  
</form>
<div id="txtHint"></div>
<button  class="btn btn-primary mb-5" onclick="Check()" name="smtbtn">Submit</button>

  <script>
  function Check() {
    var em=document.getElementById("em").value;
    var pass=document.getElementById('pass').value;
    if (em != '') {
      if(pass !=''){
      var em=document.getElementById('em').value;
      var pass=document.getElementById('pass').value;

const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
      if( this.responseText==1){
       
        window.location.href = "Home.php";
      }
      else{
        document.getElementById("txtHint").innerHTML=this.responseText;
      }
    }
xmlhttp.open("GET", "check.php?em=" + em + "&pass=" + pass);
// console.log("Requesting...");

xmlhttp.send();
      
    } else {
    alert("Please enter your password");
    }
  }
  else{
    alert("Please enter your Email");

  }
  }
  function show1(){
  let pf = document.getElementById("pf");
  if(pf.classList.contains("fa-eye-slash")){
    pf.classList.remove("fa-eye-slash");
    pf.classList.add("fa-eye");

    document.getElementById("pass").type="text"; 
  }
  else{
    pf.classList.remove("fa-eye");
    pf.classList.add("fa-eye-slash");
    document.getElementById("pass").type="password"; 

  }
}
  </script>


        </div>
        <div id="SignUp">
            <p class="SignUp">Don't have an account? &nbsp; <a href="SignUp.php">Sign Up</a></p>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>