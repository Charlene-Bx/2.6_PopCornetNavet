<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopCorn et Navet</title>
    <link rel="stylesheet" href="./view/style/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./view/style/normalize.css/normalize.css">
    <link rel="stylesheet" href="./view/style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./view/style/style.css">
      
</head>
<body>

    <?php

    // require './view/navbar.php';
    // require './view/login.php';
    // require './view/cat_action.php';
    


    require_once './view/login.php';
    require_once './brain/login.php';
    
    



    // require_once './view/signin.php';
    // require_once './brain/createAccount.php';
    //
    // >> A FAIRE:
    //  Animation Js pour passer de login à sign lorsque l'utilisateur clique sur le lien "Tu n'as pas encore de compte?"
    //  Style de l'input submit (Est-ce que ça fonctionnerait aussi avec un bouton?)
    //  Requête db pour la login page; quand l'utilisateur clique sur "me connecter" si il est dans les bases de donnée, l'envoyer sur homePage.php

    ?>

    <!-- <div id="api" class="posters">
        <h1>film connue</h1>
    </div> -->
    
<script src="./view/js/index.js"></script>
</body>
</html>










<!-- 


<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">    
        </head>
        <body>
        <h1>hellotest</h1>  
            <?php
            // require './asset/navbar.php';
            // require 'login.php';
            // require './action.php';
            ?>
        <script src="./asset/js/index.js"></script>
        
        </body>
        </html> 
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Registration</title>
</head>
<body>


   <div class="logo">
       <img src="images/logo.png" alt="">
   </div>

    <div class="wrapper">
    
        <div class="title">login</div>

        <form class="form" method="POST" action="">
            
            <div class="input_fild">
                <label for="mail">email address</label>
                <input name="mail" type="email" class="input" id="mail">
            </div>
            <div class="input_fild">
                <label for="">password</label>
                <input name="pass" type="password" class="input" id="pass">
            </div>
            <input type="submit" name="login" value="Login">
            
            <a href="signup.php">create</a>
            <?php 
            // include 'brain/login.php';
            ?>
        </form>
    </div> -->