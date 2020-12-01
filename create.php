<form method="get" action="http://8889/create.php">
<!-- QUESTION 1-->
<p>What is your age ?</p>
<label for="agefoot">...</label>
<input type="text" name="agefoot">
<!-- QUESTION 2-->
<p>What is your genre ?</p>
<!-- MALE -->
<input type="radio" id="male" name="genrefoot" value="male">
<label for="male">Male</label><br>
<!-- FEMALE -->
<input type="radio" id="female" name="genrefoot" value="female">
<label for="female">Female</label><br>
<!-- QUESTION 3-->
<p>What is your name ?</p>
<label for="namefoot">...</label>
<input type="text" name="namefoot">

<p>please click</p>
<input type="submit" name="submit" value="click">
</form>

<?php
$agefoot = $_GET['agefoot'];
$genrefoot = $_GET['genrefoot'];
$namefoot = $_GET['namefoot'];

if($agefoot>21 and $agefoot<40 and $genrefoot == "female" and strlen($namefoot) > 0 ){
  echo "welcome to the team $namefoot!";
}

else{
  echo "Sorry you don't fit the criteria";
}

?>