
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
            if(password_verify($cmdp, $result["cmdp"])){
                session_start();
<<<<<<< HEAD
                $_SESSION['userName']=$result['userName'];
                header('Location: http://localhost:8888/2.6_PopCornetNavet/view/home.php');
=======
                $_SESSION['userName']= $result['userName'];
                header('Location: http://localhost:8888/2.6_PopCornetNavet/view/homePage.php');
>>>>>>> 1db71599272d738f84c47edb3ec57b2bd6198ce7
                exit();
                // faire variable pour afficher les else
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
