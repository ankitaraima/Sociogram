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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pixelify+Sans&display=swap" rel="stylesheet">
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
height: 120vh;
width: auto;
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
#SignIn{
  /* display: inline-block; */
    margin:  auto;
    padding: 3px;
    background-color: #8ebf42;
    width:60vh;
    border-radius: 20px;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.582);
}
.SignIn{
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
.fa{
  position:relative;
  top:-30px;
  left:140px;
  margin-bottom:0;
  color:rgba(0,0,0,0.240);
  cursor:pointer;
}
.btn-primary,  .btn-primary:visited {
    background-color: white !important;
    color:#8ebf42 !important; 
    font-weight: bold !important;
    border: #8ebf42 !important;
}
.btn-primary:hover,.btn-primary:active{
    background-color: #63a500 !important;
    color:white !important; 
    box-shadow:  3px 2px 4px rgba(0, 0, 0, 0.582) !important;
}

.form-control:focus {
    border-color: #8ebf42 !important; 
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(253, 249, 249, 0.6) !important;
    /* border-radius:250px !important; */
    box-shadow:  3px 2px 4px rgba(0, 0, 0, 0.582) !important;

  }
  form{
    
  }
  #forget{
       text-align: left;
       margin-left:0.5px;
       margin-bottom:2rem;
      
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
    margin-bottom:2rem;
    font-size:20px;
  }
</style>
<body>
    <div id="main">
        <div id="data">
            <p id="logo">Let's Connect</p>
            <form class="form mr-2 ml-2 pr-2 pl-2 ">
            <div class="row mb-4">
    <div class="col">
      <input type="text" class="form-control" id="fn" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" id="ln" placeholder="Last name">
    </div>
  </div>       
  <div class="form-group mb-4">
 
    <input type="text" class="form-control" id="con" aria-describedby="emailHelp" placeholder="Enter contact number">
   
  </div>
  <div class="form-group mb-4">

    <input type="email" class="form-control" id="em" placeholder="Enter Email id">
  </div>
 
  <div class="form-group mb-0">

<input type="password" class="form-control" id="pass"  placeholder="Password">
<i class="fa fa-eye-slash mb-0" aria-hidden="true" id="pf" onclick="show1()"></i>
</div>
<div class="form-group mb-0">

<input type="password" onkeyup="checkPass()" class="form-control" id="conpass" placeholder="Confirm Password">
<i class="fa fa-eye-slash mb-0" aria-hidden="true" id="cpf" onclick="show2()"></i>
</div>

<div class="form-group mb-2 ">

<!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="State">
 -->
 <select id="sta" name="country-state" class="form-control pr-5">
    <option value="">Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
</div>

</form>
<div id="txtHint"></div>
<button  class="btn btn-primary mb-5" onclick="Check()">Submit</button>

        </div>
        <div id="SignIn">
            <p class="SignIn">ALready have an account? &nbsp; <a href="index.php">Log in</a></p>
        </div>
    </div>
    <script>
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
function show2(){
  let cpf = document.getElementById("cpf");
  if(cpf.classList.contains("fa-eye-slash")){
    cpf.classList.remove("fa-eye-slash");
    cpf.classList.add("fa-eye");
    document.getElementById("conpass").type="text"; 

  }
  else{
    cpf.classList.remove("fa-eye");
    cpf.classList.add("fa-eye-slash");
    document.getElementById("conpass").type="password"; 

  }
}
  function checkPass(){
    var conpass=document.getElementById('conpass').value;
    var pass=document.getElementById('pass').value;
    if(conpass==pass){
      document.getElementById("conpass").style.backgroundColor = "rgba(10, 248, 62, 0.461)";

    }
    
    else{
      document.getElementById("conpass").style.backgroundColor = "rgba(248, 10, 10, 0.461)";
    }


  }    
  function Check() {
    var fn=document.getElementById("fn").value;
    var ln=document.getElementById('ln').value;
    var em=document.getElementById("em").value;
    var pass=document.getElementById('pass').value;
    var sta=document.getElementById("sta").value;
    var conpass=document.getElementById('conpass').value;
    var con=document.getElementById('con').value;
// console.log(fn+ln+em+pass+sta+conpass+con);
    if (fn!='' && ln!='' && em!='' && pass!='' && sta!='' && conpass!='' && con!='' ) {
      if(pass==conpass){
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
      if( this.responseText==1){
        window.location.href = "Home.php";
      }
      else{
        document.getElementById("txtHint").innerHTML=this.responseText;
      }
    }
xmlhttp.open("GET", "createAccount.php?fn=" + fn + "&ln=" + ln+"&em="+em+"&pass="+pass+"&sta="+sta+"&conpass="+conpass+"&con="+con);
// console.log("Requesting...");

xmlhttp.send();
      
    }
  else{
    alert("Both password and confirm password should be same!!");
  }
  } else {
    alert("Please enter all the fields!!");
    }

  }

  
  </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>