

   <?php 
   $title ='Index';
   require_once 'includes/header.php';
    require_once 'db/conn.php';
    $results = $crud->getSession();
   
?>

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
       
          </div>
          <div class="container-fluid">
            <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
               <h1 class="text-center">Overview</h1>
                <p class="lead">G-Conference has served millions of HR professionals who-in turn-helped/impacted the lives of BILLIONS of workers across the world. 
                    As we come together for Conference 2022, we will work together to tackle the continuous challenges facing our industry. No matter where you are in your career.Be part of this special 
                    event and join your peers May 11-14 in Wait-a Bit, Clarendon and online for Conference 2022.</p>
            <img src="uploads\images (1).jpg" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
          <h1 class="text-center">Peer-To-Peer Connections</h1>
                <p class="lead">Learn from and quickly connect with attendees whose professional backgrounds and interests are similar to your own.</p>
                <h1 class="text-center">Customized Learning</h1>
                <p>Select a content track to find sessions on topics that matter the most to you. Your learning journey can be tailored even further with additional preconference offerings.</p>
            <img src="uploads\CUSTOMLEARNING-workshop-2 (1).jpg" class="img-fluid pb-3">
          </div>
          <div class="col-lg-4 col-md-4 col-12">

          <h1 class="text-center">Eye-Opening Exhibits</h1>
                <p class="lead">Visit the G-Conference Expo to find the latest resources and connect with hundreds of solution providers. 
    Learn more from exhibitors and sponsors during presentations in the Exhibitor Theatres. Enter the Grand Prize Drawing for a chance to win a trip for 2 to G-Conference.</p>
            <img src="uploads\Conference-image-v1-1024x683 (1).jpg" class="img-fluid pb-3">
          </div>
          </div>
          </div>
          </body>
          <?php require_once 'includes/footer.php';
 ?>
          </html>
