<?php session_start(); ?>

<?php 
include '../include/db.php';
include '../include/action.php';

?>

<!doctype html>
<html lang="en" >
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../style1/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Home page</title>
</head>
<body style="">
  <header>





    <div class="container">
       <?php 
if (isset($_SESSION['exats'])) {
 echo '<div class="alert alert-success" role="alert">
  You are registered!!!
</div>';

}unset($_SESSION['exats'])
       ?>
      <nav class="row navbar  navbar-dark bg-dark">
        <p class="col-2 d-none d-lg-block  nav-item dropdown "style="color: #00BDFF;">
          telephone:555555
        </p>
        <p class="col-4 d-none d-lg-block nav-item dropdown"style="color: #00BDFF;">
          welcome to our shop

        </p>
        <div class="col-6 col-lg-2  input-group mb-3">
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>AM</option>
            <option value="1">RU</option>
            <option value="2">EN</option>

          </select>
        </div>
        <div class=" col-6 col-lg-2 input-group mb-3">
          <select class="custom-select" id="inputGroupSelect01">
            <option selected>$</option>
            <option value="1"> €</option>
            <option value="2">₽</option>

          </select>

        </div>
        <div class="col-2  mb-3 d-none d-lg-block nav-item dropdown">
         <button type="button"  class="btn btn-primary">
          Wishlist <span class="badge badge-light">4</span>
        </button>


      </div>
    </nav>
















    <nav class="row navbar navbar-light "style="background-color: #e3f2fd;">

      <a class="navbar-brand font-weight-bolder"style="color: green;" href="index.html">
       <img src="https://elevatedigital.hk/wp-content/uploads/2016/05/mobileshop-logo.png" width="295" height="142" class="d-inline-block align-top" alt="" loading="lazy">
     </a>
     <form class=" form-inline">

      <input class="d-none d-lg-block form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="d-none d-lg-block btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <div class=" ml-2 dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Acount
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item"  data-toggle="modal" data-target="#login"href="#">Log In</a>
          <a class="dropdown-item" href="#"data-toggle="modal" data-target="#register">Register</a>
         
        </div>
      </div>
    </form>

  </nav>







</div>
</nav>



</div>
</div> 
</header>