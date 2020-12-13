<?php 
// session_start();
// $login="index.php";
// $subscribe="signup.php";
// $msg = "";
// $name = $_SESSION['fuserName'];
// if ($name!= ""){$msg = "Welcome ".$fuserName."<br><br>";
// }else {
//     $msg = '<li class="nav-item"><a class="nav-link" href="'.$login.'">Log in</a></li><li class="nav-item"><a class="nav-link" href="'.$subscribe.'">Subscribe</a></li>';
//     //  "<a href='$login'>Log in</a>"." or "."<a href='$subscribe'>Sign up</a>"."</p>";   
// }
?>





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
    require_once 'navbar.php';
    
    ?>
    <div class="section">
        <h1>Le meilleur du pire</h1>
        <?php
            include "./maxi_carousel.php"
        ?>
    </div>

    <div class="section">
        <h2>Les nouveautés</h2>
        <?php
            include "./mini_carousel.php"
        ?>
    </div>


<?php
        include "./footer.php"
    ?>  
<script src="./js/navbar.js"></script>
<script src="./js/api.js"></script>
</body>
</html>