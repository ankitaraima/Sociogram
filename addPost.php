<?php
include_once('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociogram</title>
    <style>
        .main{
            width: 100%;
            height:100%;
  text-align: center;
 }

 .Button{
    /* border: 5px solid; */
  margin: 20vh auto 0 auto;
  width: 50%;
  padding: 10px;
  position: relative;
  display:flex;

  height: 6vh;
  /* margin:2em 0 1rem 0 ; */
  width:75%;
  cursor: pointer;
  border:2px solid #8ebf42;
    color:#8ebf42;
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color:#8ebf42;
  font-size:1rem;
  font-weight: bold;
  padding:0.5em 0.5em;
  z-index:1;
  align-items: center;
  vertical-align: middle;
  text-align: center;
  justify-content: center;
  border-radius: var(--radius-4);
    box-shadow: var(--shadow-3);
}
.Button::after{
 content:'';
 position: absolute;
 color:white;
 width:100%;
 height: 100%;
 border-radius: var(--radius-5);
 background-color:#8ebf42 ;
 top:0;
 left:0;
 z-index: -1;
 transition:transform 200ms ease-in;
}
.Button:hover{
    color:white;
}
.Button-one::after{
    border-radius: var(--radius-4);
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.Button-one:hover::after{
    border-radius: var(--radius-4);
  transform: scaleX(1);
  transform-origin: left;
  color:white;
}
.content{
    background-color: rgba(255,255,255,0.600);
    
    display: inline-block;
  margin:  auto;
  padding: 3px;
  width:50vw;
  height:100vh;
  margin:1rem 0;
  box-shadow:8px 8px 30px rgba(0,0,0,0.200);
  text-align: center;
  
  /* align-item:center; */
  

  

}
textarea{
    /* margin: 20vh auto 0 auto; */
  /* width: 50%; */
  padding: 10px;
  position: relative;
    border:2px solid #8ebf42 !important;
    margin:2rem 1rem;
    width:37.5rem !important;

}

nav{
    position: fixed;
  /* bottom: 0;
  right: 0; */
}

    </style>
</head>
<body>

    <div class="main">
        <div class="content">
        <form>
        <label class="Button Button-one  myfile">
Choose image from device
<input type="file" name="myfile" accept="image/jpeg, image/png, image/jpg" style="background-color:white; color:black; display:none">

</label>
           
            <div class="form-group">
                <textarea class="form-control" id="caption" rows="5" cols="2" placeholder="Write a caption..."></textarea>
            </div>
            <label class="Button Button-one  myfile">
Upload
<input type="submit" name="submit"  style="background-color:white; color:black; display:none">

</label>
            
</form>


        </div>

    </div>
</body>
</html>
