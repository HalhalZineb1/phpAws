 <?php
    include('connexion.php');
    $req="INSERT INTO utilisateur (NOM, EMAIL, ADRESSE, PWD) VALUES (?, ?, ?, ?)";
    $CNE=$_POST['login'];
    $Nom=$_POST['nom'];
    $Adresse=$_POST['adresse'];
    $PW=$_POST['pwd'];

    $reslt=$dbh->prepare($req);
    $reslt->execute(array($CNE,$Nom,$Adresse,$PW));
    include "index.php";
?>
