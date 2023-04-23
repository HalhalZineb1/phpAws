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
  <link rel="stylesheet" href="nouveau 1.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
 

  <script type="text/javascript" src="../js/cg_script.js"></script>

  </script>
  
</head>
<!-- début du corps du document html -->
<body>

   <nav id="sidebarMenu" >
	
      <a href="../accueil.php">Accueil</a>
      <a href="../pages/guide.php">Guide déploiement</a>
      <a href="../tst1/nouveau12.php">Avantage<br> Azure.</a>
      <a href="../dist/react.php">React</a>
    </nav>



<div class="wrapper">
	<h1>Pourquoi AWS</h1>
  <h2>Tournez les cartes!</h2>
  <h3>Pour savoir</h3>
</div>

<div class="flip">
    <div class="front" style="background-image: url('evo.jpg')">
       <h1 class="text-shadow">Évolutivité </h1>
    </div>
    <div class="back">
       <h2>Évolutivité</h2>
       <p> AWS est conçu pour être hautement évolutif, ce qui signifie que vous pouvez facilement augmenter
          ou diminuer vos ressources cloud en fonction de vos besoins, sans avoir à vous soucier de la gestion matérielle sous-jacente.</p>
    </div>
	
</div>
<div class="flip">
    <div class="front" style="background-image: url('flex.jpg')">
       <h1 class="text-shadow">Flexibilité</h1>
    </div>
    <div class="back">
       <h2>Flexibilité</h2>
       <p> AWS offre une large gamme de services et de fonctionnalités, 
         permettant aux utilisateurs de personnaliser leurs solutions cloud en fonction de leurs besoins spécifiques.</p>
    </div>
</div>
<div class="flip">
    <div class="front" style="background-image: url('securite.jpg')">
       <h1 class="text-shadow">Sécurité</h1>
    </div>
    <div class="back">
       <h2>Sécurité</h2>
       <p> AWS prend la sécurité très au sérieux et offre une grande variété de fonctionnalités de sécurité, 
       telles que la gestion des identités et des accès, la surveillance des activités, la conformité réglementaire, 
       la protection des données, etc.</p>
    </div>
</div>

<br>
<br>

<!-- vertical -->
  

<div class="flip flip-vertical">
    <div class="front" style="background-image: url('intt.jpg')">
       <h1 class="text-shadow">Disponibilité</h1>
    </div>
    <div class="back">
       <h2>Disponibilité</h2>
       <p> AWS offre une disponibilité élevée, avec une infrastructure redondante et une architecture de disponibilité régionale.
          Cela permet d’assurer une haute disponibilité de vos applications et services.</p>
    </div>
</div>
<div class="flip flip-vertical">
    <div class="front" style="background-image: url('cout.png')">
       <h1 class="text-shadow">Coûts</h1>
    </div>
    <div class="back">
       <h2>Coûts</h2>
       <p>AWS propose une tarification à l’utilisation, ce qui signifie que vous ne payez que pour les services que vous utilisez réellement.
          AWS propose également des options de tarification personnalisées et des remises pour les clients fidèles, ce qui peut aider à réduire les coûts.</p>
    </div>
</div>
<div class="flip flip-vertical">
    <div class="front" style="background-image: url('col.jpg')">
       <h1 class="text-shadow">Écosystème:</h1>
    </div>
    <div class="back">
       <h2>Écosystème:</h2>
	   
       <p> Écosystème: AWS dispose d’une communauté d’utilisateurs et de partenaires très active et en expansion constante,
          avec une grande variété de ressources disponibles pour aider les utilisateurs à tirer le meilleur parti de leurs solutions cloud.</p>
    </div>
</div>






  <section id="container_principal" class="container_nous">
    <!-- container principal avec une classe unique et un id commun à toutes les pages  -->
    <button class="menu" onclick="ouvertureFermetureMenu()">☰</button>
    <!-- Bouton d'ouverture du menu -->

  </section>
   
  
</body>
</html>
