

<!doctype html>
<html lang="en">
  <head>
  <title>Conference </title>
      <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1. shrink-to-fit=no?">
   
    <!--Bootstrp css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
  
    <link rel="stylesheet" href="css/site.css" />
     </head>
    <body>
   <?php 
    //require_once 'db/conn.php';
   // $results = $crud->getSession();
?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">G-Conference</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Program
          </a>      
<ul class="dropdown-menu">
          <!--  <li><a class="dropdown-item" href="#">Overview</a></li>
            <li><a class="dropdown-item" href="#">Sessions</a></li>
            <div class="dropdown-menu">-->
            <div class="dropdown-menu">
  <a class="dropdown-item active" aria-current="page" href="overview.php">Overview</a>
  <a class="dropdown-item active" aria-current="page" href="consession.php">Sessions</a>
 
</div>
           
</ul>
</li>
      <li class="nav-item">
      <a class="nav-link navbar-nav me-auto mb-2 mb-lg-0"aria-current="page" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
      <a class="nav-link navbar-nav me-auto mb-2 mb-lg-0"aria-current="page" href="rate.php">Rate</a>
      </li>
      <li class="nav-item">
      <a class="nav-link navbar-nav me-auto mb-2 mb-lg-0"aria-current="page" href="register.php">Registration</a>
      </li>
    </ul>
    <a class="nav-link navbar-nav me-auto mb-2 mb-lg-0"aria-current="page" href="viewrecords.php">View Participants</a>
      </div>
      <?php
            if(!isset($_SESSION['userid'])){
        ?>
          <a class="nav-link navbar-nav me-auto mb-2 mb-lg-0"aria-current="page" href="login.php">Login <span class="sr-only"></span></a>
          <?php }else { ?>    
           <a class="nav-link" href="#"> <span>Hello <?php echo $_SESSION['username'] ?>! </span><span class="sr-only"></span></a>
            <a class="nav-link" aria-current="page" href="logout.php">Logout <span class="sr-only"></span></a>
            <?php } ?>
              </div>
          </a>
  
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="uploads\Conferences-1200x627.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="uploads\conferences-events-banner@2x-scaled-e1652808678149.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="uploads\VISC-Conference-audience-1024x524.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Overview</h2>
          </div>
          <div class="container-fluid">
            <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="uploads\images (1).jpg" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="uploads\CUSTOMLEARNING-workshop-2 (1).jpg" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="uploads\Conference-image-v1-1024x683 (1).jpg" class="img-fluid pb-3">
          </div>
          </div>
          </div>
          </body>
          <?php require_once 'includes/footer.php';
 ?>
          </html>
<!--<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getConference();
?>

    <?php require_once 'includes/footer.php';
 ?>