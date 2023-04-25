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
  <link rel="icon" type="image/png" href="../votre-favicon.png">



  <script type="text/javascript" src="../js/cg_script.js"></script>

  </script>
  
</head>
<!-- début du corps du document html -->
<body>

   <nav id="sidebarMenu" >
	
      <a href="../accueil.php">Accueil</a>
      <a href="../pages/guide.php">Guide déploiement</a>
      <a href="../tst1/nouveau12.php">Avantage<br> Azure.</a>
      <a href="../dist/react.php">Avis utilisateur</a>
    </nav>


<div class="wrapper">
	<h1>Pourquoi Azure</h1>
  <h2>Tournez les cartes!</h2>
  <h3>Pour savoir</h3>
</div>

<div class="flip">
    <div class="front" style="background-image: url('evo.jpg')">
       <h1 class="text-shadow">Évolutivité </h1>
    </div>
    <div class="back">
       <h2>Évolutivité</h2>
       <p>Azure permet de facilement mettre à l’échelle 
	   les ressources en fonction des besoins de votre entreprise, permettant une gestion plus efficace des charges de travail.</p>
    </div>
	
</div>
<div class="flip">
    <div class="front" style="background-image: url('flex.jpg')">
       <h1 class="text-shadow">Flexibilité</h1>
    </div>
    <div class="back">
       <h2>Flexibilité</h2>
       <p> Azure prend en charge un large éventail de langages de programmation, 
	   de bases de données, de systèmes d’exploitation et de frameworks,
	   ce qui permet de travailler avec les technologies de votre choix.</p>
    </div>
</div>
<div class="flip">
    <div class="front" style="background-image: url('securite.jpg')">
       <h1 class="text-shadow">Sécurité</h1>
    </div>
    <div class="back">
       <h2>Sécurité</h2>
       <p>Azure utilise des techniques de sécurité avancées, 
	   notamment la surveillance continue, la détection d’intrusion et la gestion des identités,
	   pour protéger vos données et vos applications.</p>
    </div>
</div>

<br>
<br>

<!-- vertical -->
  

<div class="flip flip-vertical">
    <div class="front" style="background-image: url('int.jpg')">
       <h1 class="text-shadow">Intégration</h1>
    </div>
    <div class="back">
       <h2>Intégration</h2>
       <p> Azure s’intègre facilement à d’autres services et applications, 
	   tels que Microsoft Office 365, ce qui permet d’optimiser la productivité et la gestion des données.</p>
    </div>
</div>
<div class="flip flip-vertical">
    <div class="front" style="background-image: url('cout.png')">
       <h1 class="text-shadow">Coûts</h1>
    </div>
    <div class="back">
       <h2>Coûts</h2>
       <p>Azure propose une tarification flexible,
	   permettant de payer uniquement pour les services utilisés, ce qui peut réduire les coûts de l’infrastructure informatique.</p>
    </div>
</div>
<div class="flip flip-vertical">
    <div class="front" style="background-image: url('col.jpg')">
       <h1 class="text-shadow">Collaboration :</h1>
    </div>
    <div class="back">
       <h2>Collaboration :</h2>
	   
       <p> Azure prend en charge la collaboration en temps réel,
	   ce qui permet à des équipes de travailler ensemble sur des projets à distance.</p>
    </div>
</div>






  <section id="container_principal" class="container_nous">
    <!-- container principal avec une classe unique et un id commun à toutes les pages  -->
    <button class="menu" onclick="ouvertureFermetureMenu()">☰</button>
    <!-- Bouton d'ouverture du menu -->

  </section>
   
  
</body>
</html>
