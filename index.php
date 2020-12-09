<!-- <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopCorn et Navet</title>
    <link rel="stylesheet" href="./asset/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./asset/node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
        </html> -->
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
            <?php include 'brain/login.php';?>
        </form>
    </div>
        

</body>
</html>
