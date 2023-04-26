<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="utf-8">
  <title>Déploiement d'un site web PHP sur Azure Cloud</title>
  
  <style>
/* Sidebar menu  */

#sidebarMenu {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  display: flex;
  flex-wrap: nowrap;
  justify-content: center;
  flex-direction: column;
  background-color: black;
  overflow: hidden;
  transition: all 0.4s;

}

#sidebarMenu a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.4s;
  white-space: nowrap;
  font-family: 'Lato', sans-serif;
}

#sidebarMenu a:hover {
  color: #f1f1f1;
}

/* #sidebarMenu .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
} */

.menu {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  position: fixed;
  top:25px;
  left:25px;
  z-index: 10;
}

.menu:hover {
  background-color: #444;
}

#sidebarMenu ~ * {
  transition: all 0.4s;
}

#sidebarMenu.ouverte {
  width:250px;
}
#sidebarMenu.ouverte ~ * {
  margin-left:250px;
}
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
    }
    h1 {
        color: green;
        font-size: 50px;
        text-align: center;
        margin-top: 60px;
	font-family: Edwardian Script ITC;
    }
	h2{
        color: red;
        font-size: 50px;
        text-align: center;
        margin-top: 60px;
		font-family: Edwardian Script ITC;
    }
    p {
        font-size: 18px;
        line-height: 1.5;
        margin: 20px auto;
        max-width: 800px;
        text-align: justify;
    }
	img.logo {
			position: absolute;
			top: 10px;
			left: 10px;
			
		}
.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.container p {
  flex: 1 1 50%;
  text-align: center;
}

.image-right {
  flex: 1 1 50%;
  text-align: right;
}

.image-right img {
  max-width: 100%;
}

.container11 {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
}

.image {
  flex: 1;
}

.text {
  flex: 2;
}

  </style>
</head>
<body>


  <link rel="icon" type="image/png" href="/votre-favicon.png">



  <!-- on ajoute les fonts google -->
  <script type="text/javascript" src="./js/cg_script.js"></script>
   <style>
      /* Styles pour le slogan */


 


</style>

   <link rel="icon" type="image/png" href="your-favicon.png">
</head>
<!-- début du corps du document html -->
<body>
  

     <nav id="sidebarMenu" >
	
    <a href="accueil.php">Accueil</a>
    <a href="guide.php">Guide déploiement</a>
    <a href="tst1/nouveau12.php">Avantage<br> Azure.</a>
    <a href="dist/react.php">Avis utilisateur</a>
  </nav>

  <section id="container_principal" class="container_accueil">
    <!-- container principal avec une classe unique et un id commun à toutes les pages  -->
    <button class="menu" onclick="ouvertureFermetureMenu()">☰</button>
    <!-- Bouton d'ouverture du menu -->
<img src=".\votre-favicon.png" alt="Logo du site" class="logo" width="200" height="150" style="border-radius: 50%;">

<br><br>
  <h1>Déploiement d'un site web PHP sur Azure Cloud</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  <p>Introduction : Dans le cadre de mon projet, j'ai développé un site web PHP en utilisant un environnement de développement local. L'objectif de ce projet est de déployer ce site web sur Azure Cloud en utilisant les services proposés par Microsoft pour la création d'applications Web.</p>
  <div class="image-right">
    <img src=".\azureimg.png" width="200" height="150">
  </div>
</div>
<br><br><br>
  <p>J'ai commencé par créer un compte sur le portail Azure,




  puis j'ai créé une Web App pour héberger mon application.

  j'ai configuré mon Web App pour qu'elle prenne en charge le langage PHP.
  Ensuite, j'ai créé une base de données SQL sur Azure Cloud pour stocker les données de mon site web c'est les utilisateurs qui sont connecté au site. 
  </p>
  <center>  <img src=".\iimgg.png" width="1000" height="450"></center>
  
  
  <br><br><br><br><br><br><br><br><br>
  
  
  
  
  <div class="container11">
  <div class="image">
    <img src=".\gitt.png" width="900" height="750">
  </div>
  <div class="text">
    <p>J'ai utilisé GitHub pour héberger mon code source et configuré la connexion entre mon compte GitHub et mon Web App sur Azure pour un déploiement continu. J'ai également configuré la connexion entre mon site web PHP et ma base de données SQL sur Azure.</p>
  </div>
</div>

  
  
  
    <br><br><br><br><br><br><br><br><br>
  
  
  
  
  
  
  
<h2>
Résultats :</h2> Grâce à mon déploiement sur Azure Cloud, j'ai pu bénéficier des avantages suivants : </p>
  <ul>
     <li>Une haute disponibilité de notre site web, car Azure garantit une disponibilité de 99,95% de notre Web App.</li> </center>
    <li>Une évolutivité, car Azure nous permet de mettre à l'échelle notre application en fonction de l'augmentation du trafic.</li>
    <li>Une sécurité améliorée grâce aux fonctionnalités de sécurité intégrées dans Azure.</li>
  </ul>
 <h2> Conclusion : </h2>Le déploiement de mon site web PHP sur Azure Cloud a été une expérience positive. J'ai pu bénéficier des avantages d'une infrastructure de cloud computing tout en réduisant les coûts liés à l'infrastructure matérielle. Je recommande l'utilisation d'Azure pour le déploiement d'applications Web en raison de ses fonctionnalités évoluées, de sa sécurité et de sa haute disponibilité. 
  Travailler sur Azure pour ce projet a été une expérience enrichissante pour moi. J'ai adoré travailler avec les différentes fonctionnalités et les outils proposés par la plateforme. C'était une chance pour moi de pouvoir utiliser Azure pour ce projet et j'ai consacré beaucoup de temps
pour le réaliser avec succès.
Je suis fière du résultat final et je suis reconnaissante d'avoir eu l'opportunité de travailler sur Azure pour ce projet.
