
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




if(isset($_POST['login']))
{

    extract($_POST);

   
        
    include 'database.php';
    global $db;

    

    if(!empty($Email) && !empty($cmdp))
    {
        
        $q = $db->prepare("SELECT * FROM User WHERE Email = :Email");
            $q->execute([
                'Email'=>$Email]);

            $result = $q->fetch(); 
            
            if($result == true)
            {
            if(password_verify($pass, $result["cmdp"])){
                session_start();
                $_SESSION['userName']=$result['userName'];
                header('Location: http://localhost:8888/2.6_PopCornetNavet/view/home.php');
                exit();
            }else {
                echo "le mot de passe est incorect";
            }
        }else{
            echo "le compte $Email n'existe pas";
        }
    }else{
        echo "Veuillez remplir tous les champs.";
    }
}

?> 
