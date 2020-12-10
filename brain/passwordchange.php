<?php
//Forgotten password
//Send email with link to change password
if(isset($_POST['mail_pw'])){
    $email = $_POST['username_pw'];
    $query7= "SELECT confirmation_token FROM user WHERE email='$email'";
    $token = mysqli_fetch_assoc(mysqli_query($db,$query7))['confirmation_token'];
    mail($email, "Welcome at Foodflix, please change your password.", "To change your password please click on the link just below : \n\n http://lockalhost/foodflix/passwordchange.php?email=$email&token=$token");
}


if(isset($_GET['email'])){
    $email = htmlentities($_GET['email']);
    $query6 = "SELECT confirmation_token FROM user WHERE email='$email'";
    $check_token = mysqli_query($db,$query6);
    $final_check = mysqli_fetch_assoc($check_token)['confirmation_token'];

    if ($final_check === htmlentities($_GET['token'])){
        $_SESSION['checkmail'] = $email;
    }
}

//Change password page after email forgotten pw
if(isset($_POST['forgot_pw'])){
    $email_confirmation = $_SESSION['checkmail'];
    $password_new_1 = password_hash(htmlentities($_POST['password_new_1']), PASSWORD_DEFAULT); //encrypt password
    $queryPW = "UPDATE user SET password = '$password_new_1' WHERE email = '$email_confirmation'";
    mysqli_query($db,$queryPW);
    var_dump($password_new_1);
    header('location: login.php');        
}
?>