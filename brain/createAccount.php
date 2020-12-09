
<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if(isset($_POST['submit'])){

    extract($_POST);

    
  
    if(!empty($pass1) && !empty($pass2) ){

        $options = [
            'cost' => 12,
        ];
        
        
        $hashpass= password_hash($pass1, PASSWORD_BCRYPT , $options);

        include 'database.php';
        global $db;
        
        
        $q = $db->prepare("INSERT INTO User (userName, Email, cmdp) VALUES ('$fuserName','$Email1','$hashpass')");
        $q->execute([
            'userName'->$fuserName,
            'Email'->$Email1,
            'cmdp'->$hashpass
            ]);

        header("Location:./index.php");
    }else{
        echo "<p>Veuillez remplir correctement tous les champs svp...</p>";
    }
}
?> 