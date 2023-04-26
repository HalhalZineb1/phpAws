<!DOCTYPE html>
<!-- indique qu'il s'agit d'une page web html -->
<html lang="fr" >
<!-- permet au navigateur de se préparer a lire du code html  -->
<head>
  <!-- informations d'entête utilisées -->
  <meta charset="utf-8">
  <!-- encodage de caractère -->
  <title>Guide</title>
  <!-- Titre de la page -->
  <link rel="stylesheet" href="../style1.css">
  <link rel="icon" type="image/png" href="../votre-favicon.png">



  <script type="text/javascript" src="../js/cg_script.js"></script>
  <style>body {
  background-image: url('ca.png');
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
    <a href="../dist/react.php">Avis utilisateur</a>
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
   
	
    <input checked='checked' id='step-1' name='step' type='radio'>
    
    <div class='progress_inner__bar'></div>
    <div class='progress_inner__bar--set'></div>
    <div class='progress_inner__tabs'>
      
        <h1>Suivez ces étapes pour développer et déployer votre site web.<br> Créer et cloner le référentiel GitHub pour votre site web</h1>
        <p>
   	
		Description : Dans cette étape, vous allez créer un référentiel GitHub pour votre site web et cloner ce référentiel sur votre ordinateur local.
		<br>Le référentiel GitHub sera utilisé pour stocker votre code source et le déploiement continu de votre application sur Microsoft Azure.
<br>
		Instructions :
<br>
	1. Créez un compte GitHub si vous n'en avez pas déjà un.
<br>2. Créez un nouveau référentiel en cliquant sur le bouton "New Repository".
<br>3. Donnez un nom à votre référentiel et ajoutez une description si vous le souhaitez.
<br>4. Choisissez l'option "Public" ou "Private" selon votre préférence.
<br>5. Cochez la case "Initialize this repository with a README" pour créer un fichier README.md dans votre référentiel.
<br>6. Cliquez sur le bouton "Create Repository".
<br>7. Copiez l'URL de votre référentiel GitHub.
<br>8. Ouvrez votre terminal ou votre ligne de commande et accédez au répertoire où vous souhaitez cloner votre référentiel.
<br>9. Utilisez la commande "git clone" suivie de l'URL de votre référentiel GitHub pour cloner le référentiel sur votre ordinateur local.
		
		
	 </p>
      
        <h1>Installation de PHP et de la base de données SQL :</h1>
        <p>
		
		Description : Dans cette étape, vous allez développer votre site web en utilisant PHP, JS et la base de données SQL sur votre ordinateur local.
		<br>Cette étape comprend la création des pages web,
		<br>la création et la configuration de la base de données, ainsi que l'ajout du code nécessaire pour les fonctionnalités d'inscription et de connexion.
		<br>Créez les fichiers HTML, PHP, JS et CSS nécessaires pour votre site web.
		Etapes: <br>
<br>Configurez la base de données SQL en utilisant votre logiciel de gestion de bases de données préféré.
<br>Créez les tables nécessaires pour votre site web en utilisant le langage SQL.
<br>Ajoutez le code PHP pour la connexion à la base de données et pour le traitement des requêtes d'inscription et de connexion.
<br>Testez votre site web en exécutant un serveur PHP local sur votre ordinateur.
</p>
     
        <h1> Configurer les paramètres de l'application web sur Azure pour qu'elle soit connectée à la base de données SQL:</h1>
        <p>
		Configurer les paramètres de l'application web sur Azure pour qu'elle soit connectée à la base de données SQL en utilisant l'onglet Configuration dans le portail Azure :
<br>
1.Connectez-vous au portail Azure et accédez à l'application web que vous avez créée précédemment.
<br>2.Cliquez sur l'onglet Configuration dans le menu de gauche.
<br>3.Cliquez sur le bouton "Ajouter une chaîne de connexion" et entrez les informations de votre base de données SQL, y compris le nom du serveur, le nom de la base de données, le nom d'utilisateur et le mot de passe.
<br>4. Cliquez sur "OK" pour ajouter la chaîne de connexion.
	</p>

        <h1>Activer la fonctionnalité de déploiement continu avec GitHub comme centre de déploiement :</h1>
        <p>
        Activez la fonctionnalité de déploiement continu (continuous deployment) dans les paramètres de l'application web sur Azure en sélectionnant GitHub comme centre de déploiement :
<br>
<br>1. Toujours dans les paramètres de l'application web sur Azure, cliquez sur l'onglet "Déploiement continu".
<br>2. Cliquez sur "GitHub" comme centre de déploiement et connectez-vous à votre compte GitHub si nécessaire.
<br>3. Sélectionnez le référentiel que vous avez créé précédemment et choisissez la branche que vous souhaitez déployer.
<br>4. Cliquez sur "Enregistrer" pour activer la fonctionnalité de déploiement continu.
	</p>
      
        <h1> Vérification de votre application Web :</h1>
        <p>.
       Effectuez un commit et un push des modifications apportées à votre référentiel GitHub, et Azure récupérera automatiquement les modifications apportées à votre référentiel GitHub et les déploiera sur l'application web :
<br>
<br>1. Sur votre ordinateur local, apportez les modifications nécessaires à votre site web.
<br>2. Effectuez un commit et un push des modifications apportées à votre référentiel GitHub.
<br>3. Azure récupérera automatiquement les modifications apportées à votre référentiel GitHub et les déploiera sur l'application web. Vous pouvez suivre le processus
		de déploiement continu en consultant les informations sur l'onglet "Déploiement continu" de votre application web sur Azure.
	</p>


<!-- partial -->
  <script  src="./script.js"></script>

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


</body>
</html>
