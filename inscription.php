 <?php
$data = "some data to log";
echo "<script>console.log('" . $data . "');</script>";
    include('connexion.php');
    $req="INSERT INTO utilisateur (idUser,NOM, EMAIL, ADRESSE, PWD) VALUES ("1",?, ?, ?, ?)";
    $CNE=$_POST['login'];
    $Nom=$_POST['nom'];
    $Adresse=$_POST['adresse'];
    $PW=$_POST['pwd'];

    $reslt=$dbh->prepare($req);
    $reslt->execute(array($CNE,$Nom,$Adresse,$PW));
    include "index.php";
?>
