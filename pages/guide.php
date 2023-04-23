<!DOCTYPE html>
<!-- indique qu'il s'agit d'une page web html -->
<html lang="fr" >
<!-- permet au navigateur de se préparer a lire du code html  -->
<head>
  <!-- informations d'entête utilisées -->
  <meta charset="utf-8">
  <!-- encodage de caractère -->
  <title>guide</title>
  <!-- Titre de la page -->
  <link rel="stylesheet" href="../style1.css">
 

  <script type="text/javascript" src="../js/cg_script.js"></script>
  <style>body {
  background-image: url('guide.jpg');
  background-size: cover;
  background-repeat: no-repeat;
}

</style>

</head>
<!-- début du corps du document html -->
<body>

    <nav id="sidebarMenu" >
	
    <a href="../accueil.php">Accueil</a>
    <a href="guide.php">Guide déploiement</a>
    <a href="../tst1/nouveau12.php">Avantage<br> Azure.</a>
    <a href="../dist/react.php">React</a>
  </nav>
  </nav>

  <section id="container_principal" class="container_produit">
    <!-- container principal avec une classe unique et un id commun à toutes les pages  -->
    <button class="menu" onclick="ouvertureFermetureMenu()">☰</button>
    <!-- Bouton d'ouverture du menu -->

<!-- partial:index.partial.html -->
<div class='progress'>
  <div class='progress_inner'>
    <div class='progress_inner__step'>
      <label for='step-1'>Étape initiale</label>
    </div>
    <div class='progress_inner__step'>
      <label for='step-2'> Stockage Azure</label>
    </div>
    <div class='progress_inner__step'>
      <label for='step-3'> App Service</label>
    </div>
    <div class='progress_inner__step'>
      <label for='step-4'>BDD</label>
    </div>
    <div class='progress_inner__step'>
      <label for='step-5'>domaine&sécurité</label>
    </div>
	
    <input checked='checked' id='step-1' name='step' type='radio'>
    <input id='step-2' name='step' type='radio'>
    <input id='step-3' name='step' type='radio'>
    <input id='step-4' name='step' type='radio'>
    <input id='step-5' name='step' type='radio'>
    <div class='progress_inner__bar'></div>
    <div class='progress_inner__bar--set'></div>
    <div class='progress_inner__tabs'>
      <div class='tab tab-0'>
        <h1> Configuration de l'infrastructure AWS:</h1>
        <p>
   

Créez un compte AWS et connectez-vous à la console AWS.
Créez une instance EC2 (Elastic Compute Cloud) en choisissant une image AMI (Amazon Machine Image) appropriée pour votre application Web PHP.
Configurez le groupe de sécurité pour permettre l'accès HTTP et SSH depuis les emplacements autorisés.
		 </p>
      </div>
      <div class='tab tab-1'>
        <h1>Installation de PHP et de la base de données SQL :</h1>
        <p>
        

Connectez-vous à votre instance EC2 via SSH.
Installez Apache, PHP et MySQL ou MariaDB sur votre instance EC2.
Configurez votre base de données SQL pour qu'elle accepte les connexions distantes et créez votre base de données et vos tables.
</p>
      </div>
      <div class='tab tab-2'>
        <h1> Téléchargement de votre application web:</h1>
        <p>


Téléchargez votre application Web PHP sur votre instance EC2.
Assurez-vous que tous les fichiers sont placés dans le répertoire racine d'Apache, généralement /var/www/html/.
	</p>
      </div>
      <div class='tab tab-3'>
        <h1>Configuration de votre application Web PHP :</h1>
        <p>
        

Créez un fichier de configuration pour votre application Web PHP en définissant les informations de connexion à la base de données SQL, les variables d'environnement, etc.
Configurez les fichiers de votre application Web PHP pour qu'ils fonctionnent correctement avec Apache.
	</p>
      </div>
      <div class='tab tab-4'>
        <h1> Vérification de votre application Web :</h1>
        <p>.
       

Accédez à votre application Web PHP via un navigateur Web pour vérifier que tout fonctionne correctement.
Vérifiez que votre base de données SQL fonctionne correctement en testant les requêtes SQL de votre application Web
	</p>
      </div>
    </div>
<div class="progress_inner__status">
  <div class="cloud"></div>
  <div class="progress_inner__bar"></div>
  <div class="progress_inner__step">
    <label>Étape 1</label>
  </div>
  <div class="progress_inner__step">
    <label>Étape 2</label>
  </div>
  <div class="progress_inner__step">
    <label>Étape 3</label>
  </div>
</div>

<div class='progress_inner__status'>
 <div class='box_base'></div>
 <div class='box_lid'></div>
 <div class='box_ribbon'></div>
 <div class='box_bow'>
   <div class='box_bow__left'></div>
   <div class='box_bow__right'></div>
 </div>
 <div class='box_item'>cloud</div> <!-- ici on a remplacé le texte "boîte à cadeau" par "cloud" -->
 <div class='box_tag'></div>
 <div class='box_string'></div>
</div>

  </div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>



</body>
</html>
