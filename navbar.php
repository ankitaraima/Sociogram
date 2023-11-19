<!-- <?php
// ob_start();
// session_start();
// if(!isset($_SESSION['Email'])){
//   header("Location:index.php");
// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pixelify+Sans&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Sociogram</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
    body{
        margin:0;
        padding:0;
        background-color:rgba(0,0,0,0.100);
    }
    .navbar{
        /* position:fixed; */
        position: fixed;
       bottom: 0;
       width:100vw;
 z-index: 9999999999;

       /* right: 1; */
    }
    .navbar-brand{
        font-family: 'Dancing Script', cursive;
        /* font-family: 'Pixelify Sans', sans-serif; */
        font-size:30px;
        font-weight:bold;
        margin-right:25rem;

}
i{
    font-size:25px;
    margin:0.5rem 1rem 0 1rem;
}
.logout{
    position:relative;
    float:right;
    margin-left:25rem;
}
#dp{
    border-radius: 50%;
}

   </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Sociogram</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="Home.php"><i class="fa-solid fa-house"></i> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addPost.php"><i class="fa-regular fa-square-plus"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-regular fa-heart"></i></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-regular fa-comments"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link logout" href="#"><img src="UserUpload/dp.jpg" id="dp" height="40rem" width="40rem"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
      </li>
    </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>