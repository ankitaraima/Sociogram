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
.content{
    display: inline-block;
  margin: 0 auto 20rem 0;
  padding: 3px;
  background-color: rgba(255,255,255,0.600);
  width:50vw;
  height:5000vh;
  margin:1rem 0;
  box-shadow:8px 8px 30px rgba(0,0,0,0.200);
}
nav{
    position: fixed;
  /* bottom: 0;
  right: 0; */
}
#dp_cat{
    border-radius: 50%;
    height:3rem;
    display:flex;
    width:3rem;
    /* margin-top:2rem; */
    float:left;
    margin:2rem 1rem 2rem 2rem;
}
.dp{
    text-align:left;
    display:flex;
}
.name{

    margin:2.5rem 0.5rem;
    font-size:20px;
    font-weight:bold;
}
.verified{
    margin:2.7rem 0.4rem;
}
.post{
    border-radius:200%;
    
}
.caption{
    margin:2rem;
    float:left;
    font-size:20px;
    font-weight:bold;

}
    </style>
</head>
<body>

    <div class="main">
        <div class="content">
            <div class="dp">
                <div class="dpcon">

                    <img id="dp_cat" src="UserUpload/dp.jpg"  alt="">
                </div>
                <div class="name">

                    <span id="name" >nala_cat</span>
                </div>
                <div class="verified">
                    <img src="UserUpload/verified.png" height="20rem" width="20rem" alt="">
                </div>
            </div>
            <div class="post">
                <img src="UserUpload/post.jpg" height="650rem" width="650rem"  alt="">
            </div>
            <div class="caption">
                <span>
                All you need is love and a cat.
                </span>
            </div>
        </div>

    </div>
</body>
</html>
