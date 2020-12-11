<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopCorn et Navet</title>
    <link rel="stylesheet" href="./style/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./style/normalize.css/normalize.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./style/style.css">
      
</head>
<body>
    <?php
    // include './brain/login.php';
    include 'navbar.php';
    
    ?>

  <div class="card mb-4 mt-md-4 pt-md-4" style="max-width: 100%; height:600px;">
    <div class= "container-fluid">
      <div class="position-relative border display-4" style="left:90px; top:20px; width:40%; z-index:2;">
        LE MEILLEUR DU PIRE
      </div>
    </div>

  <div class="row no-gutters">
    <div class="col-md-8">
    <iframe class="card-img" width="600px" height="550px" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-4">
    
      <div class="card-body text-center-lg ">
        <h5 class="card-title">ACTION</h5> 
        <div class="card-body text-center-lg ml-md-4">
        <h1 class="card-title">Titre du film nul</h1>
        <p class="card-text">Lorem ipsum dolor sit amet, consecteturadipiscing elit. Pellentesque nunc mi,mollis vitae lectus tristique, dignissieleifend tortor. Suspendisse et ligularcu. Duis dapibus, lorem sed ultriciesegestas, tellus nulla ornare purus, nonconsectetur nibh sapien tempor velit!</p>
        </div>
        <div class="card-content mt-md-5 pt-md-5 text-center">
        <button type="button" class="btn btn-default btn-light btn-lg rounded-pill">voir le film</button>
        <br/>
        <a href="#" class="stretched-link">Lire les critiques</a>
        </div>
        
      </div>
    </div>
  </div>


<style>
  /* Make the image fully responsive */
  .carousel-inner iframe {
    width: 400px;
    height: 400px;
  }
  </style>
  
<div id="demo1" class="carousel slide ml-md-5 pl-md-5" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo1" data-slide-to="0" class="active"></li>
  <li data-target="#demo1" data-slide-to="1"></li>
  
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
   <iframe id = "card" class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe id = "card" class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe id = "card" class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe id = "card" class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
  </div>
  <div class="carousel-item">
  <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo1" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo1" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>

  
<div id="demo" class="carousel slide ml-md-5 pl-md-5" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
   <iframe class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="card-img" src="https://www.youtube.com/embed/KylLpVUT00M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
  </div>
  <div class="carousel-item">
  <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="card-img" src="https://www.youtube.com/embed/_stqtY9egkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

  <script src="./view/js/index.js"></script>
<script src="./view/js/api.js"></script>
</body>
</html>

