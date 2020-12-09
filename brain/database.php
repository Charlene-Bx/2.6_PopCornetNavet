<?php
    include("secret-info.php");
    $userData = userData;
    $userPass = passData;
    define('HOST','localhost'); 
    define('DATABASE','PopcornEtNavet'); 

    try {
    $db = new PDO("mysql:host=".HOST.";dbname=".DATABASE,$userData,$userPass);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
};

?>