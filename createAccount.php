<?php

$userName = $_POST['userName'];
$email = $_POST['Email'];
$cmdp = $_POST['cmdp'];


if(isset($userName) and isset($email) and isset($cmdp)){
  echo "welcome $userName!";
  $bdd = new PDO('mysql:host=localhost;dbname=PopcornEtNavet;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd ->query("INSERT INTO User (userName,Email,cmdp) VALUES ('$userName', '$email', '$cmdp')");
}

else{
  echo "Sorry you are missing a field";
};



    // echo "<p>".$donnees["name"] . "</p>";
    // echo "<p>".$donnees["email"] . "</p>";
 
    // INSERT INTO table_name ("attribut")
    // VALUES (value1, value2, value3, ...);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    
</body>
</html>
<h1>Sign IN</h1>
<form method="post" action="">
<!-- Name-->
<label for="userName">userName:</label>
<input type="text" name="userName" required="required">
<!-- email-->
<label for="Email">Email:</label>
<input type="email" name="Email" required="required">
<!-- password-->
<label for="mdp">password:</label>
<input type="password" name="mdp" required="required">
<!-- password-->
<label for="cmdp">confirm password:</label>
<input type="password" name="cmdp" required="required">

<input type="submit" name="submit" value="C'est par ici !" required="required">
</form>

<h1>Log IN</h1>
<form method="post" action="">
<!-- Name-->
<label for="LuserName">userName:</label>
<input type="text" name="LuserName" id="LuserName" required="required">
<!-- email-->
<label for="LEmail">Email:</label>
<input type="email" name="LEmail" id="LEmail"required="required">
<!-- password-->
<label for="Lmdp">password:</label>
<input type="password" name="Lmdp" id="Lmdp" required="required">

<input type="submit" name="submit" id="login" value="C'est par ici !" required="required">
</form>