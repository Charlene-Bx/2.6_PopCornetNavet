<!-- le noms des inputs et ids sont liés a la DB -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Document</title>
</head>
<body>
    
    <div class="logo">
       <img src="images/logo.png" alt="">
   </div>

<div class="wrapper">
        <div class="title">
            SIGN UP
        </div>

        <form class="form" method="POST" action="">
            <div class="input_fild">
                <label for="fuserName">userName</label>
                <input name="fuserName" type="text" class="input" id="fuserName" required>
            </div>
            
            <div class="input_fild">
                <label for="Email1">Email address</label>
                <input name="Email1" type="Email1" class="input" id="Email1" required>
            </div>
            <div class="input_fild">
                <label for="pass1">password</label>
                <input name="pass1" type="password" class="input" id="pass1" required>
            </div>
            <div class="input_fild">
                <label for="pass2">confirm password</label>
                <input name="pass2" type="password" class="input" id="pass2" required>
            </div>

            <input type="submit" name="login" value="Subscribe" style="width:auto">

            <?php include 'brain/createAccount.php'; ?>
        </form>
    </div>
    </body>
</html>
