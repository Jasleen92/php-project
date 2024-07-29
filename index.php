<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINIQUE Fashion Brand</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
</head>
<body>

<!-- Nav bar -->


<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">MINIQUE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Images carousel with animated background -->
<div class="carousel-background">
    <div id="demo" class="carousel slide" data-ride="carousel" style="width: 50%; margin: auto;">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="dressP.jpg" alt="dress">
            </div>
            <div class="carousel-item">
                <img src="suit.webp" alt="suit" >
            </div>
            <div class="carousel-item">
                <img src="full-dress.jpg" alt="winter-dress">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>


<!-- About Us section -->
<section class="my-5">
  <div class="py-3">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="girl.jpg" class="img-fluid" alt="About Us Image">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2>MINIQUE</h2>
        <p>Miniqu offers exquisite dresses, stylish bags, and premium makeup products. Discover a curated collection that enhances your unique style and beauty.</p>
        <a href="about.php" class="btn btn-success">Know more</a>
      </div>
    </div>
  </div>
</section>

<!-- Our products section -->
<section class="my-5">
  <div class="py-3">
    <h2 class="text-center"><i>Our Products</i></h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="dressB.webp" alt="dress image">
          <div class="card-img-overlay">
            <a href="#" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="bags3.jpg" alt="bags image">
          <div class="card-img-overlay">
            <a href="#" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
          <img class="card-img-top" src="makeup1.jpg" alt="makeup image">
          <div class="card-img-overlay">
            <a href="#" class="btn btn-primary">Explore Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Us Form -->





<!-- Script tags -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




<?php include 'footer.php'; ?>
