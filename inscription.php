 <?php

    include('connexion.php');
console.log("Message to log2");

    $req="INSERT INTO utilisateur (idUser,NOM, EMAIL, ADRESSE, PWD) VALUES ("1",?, ?, ?, ?)";
    $CNE=$_POST['login'];
    $Nom=$_POST['nom'];
    $Adresse=$_POST['adresse'];
    $PW=$_POST['pwd'];
                          
console.log("Message to log");


    $reslt=$dbh->prepare($req);
    $reslt->execute(array($CNE,$Nom,$Adresse,$PW));
    include "index.php";
?>
