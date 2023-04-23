<?php
    $cne=$_POST['email'];
    $mdp=$_POST['password'];

    include "connexion.php";
    
    $dbhstat=$dbh->query("SELECT * FROM UTILISATEUR");
    foreach ($dbhstat->fetchAll(PDO::FETCH_ASSOC) as $ligne) 
    {
        if ($ligne['email']==$cne && $ligne['pwd']==$mdp) {
            session_start();
            $_SESSION["User"]= 1;
            
            include "accueil.php";
            break;
        }else{
    
        }
    }

?>