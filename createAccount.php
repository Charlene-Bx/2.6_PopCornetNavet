<form method="post" action="">
<!-- Email-->

<label for="email">Email:</label>
<input type="text" name="email">

<!-- Name-->
<label for="name">Name:</label>
<input type="text" name="name">


<input type="submit" name="submit" value="C'est par ici !">
</form>

<?php
$email = $_POST['email'];
$name = $_POST['name'];

if(isset($email) AND isset($name)){
  echo "welcome $name!";
}

else{
  echo "Sorry you are missing a field";
};

?>
