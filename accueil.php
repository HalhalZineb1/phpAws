<!DOCTYPE html>
<!-- indique qu'il s'agit d'une page web html -->
<html lang="fr" >
<!-- permet au navigateur de se préparer a lire du code html  -->
<head>
  <!-- informations d'entête utilisées -->
  <meta charset="utf-8">
  <!-- encodage de caractère -->
  <title>Accueil</title>
  <!-- Titre de la page -->
  <link rel="stylesheet" href="./style.css">
  <!-- on ajoute le style.css à la page-->
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <!-- on ajoute les fonts google -->
  <script type="text/javascript" src="./js/cg_script.js"></script>
  

  
</head>
<!-- début du corps du document html -->
<body>
  

     <nav id="sidebarMenu" >
	
    <a href="accueil.php">Accueil</a>
    <a href="pages/guide.php">Guide déploiement</a>
    <a href="tst1/nouveau12.php">Avantage<br> Azure.</a>
    <a href="dist/react.php">React</a>
  </nav>

  <section id="container_principal" class="container_accueil">
    <!-- container principal avec une classe unique et un id commun à toutes les pages  -->
    <button class="menu" onclick="ouvertureFermetureMenu()">☰</button>
    <!-- Bouton d'ouverture du menu -->
    <h1> Déploiement Cloud avec Microsoft Azure</h1>
    <!-- titre de la page  -->
    <h2><center>Découvrez comment déployer facilement et efficacement votre site web avec Microsoft Azure,
	tout en bénéficiant<br> de nombreux avantages.</center></h2>
    <!-- sous titre de la page  -->
    <a href="pages/guide.php">En savoir plus</a>


  </section>
</body>
</html>
