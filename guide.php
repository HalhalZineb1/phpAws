<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="utf-8">
  <title>Déploiement d'un site web PHP sur Azure Cloud</title>
  
  <style>
	  /*
======================== css commun à toutes les pages ========================
*/
body {
  margin:0;
  
}
html {
/*     font-size:16px ; */
}

 h2 {
  color:white;
  font-size: 2rem;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
}
 h3 {
  color:#12232E;
  font-size: 1.5rem;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
/*    marge : haut droite bas gauche; */
   margin:0 0 10px 0;
}
.section_pleine_hauteur {
  display:flex;
  align-items:center;
  justify-content:center;
  min-height:100vh;
  flex-wrap: wrap;
  width:100vw;
}

#container_principal {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

#container_principal h1 {
  color:white;
  font-size: 5rem;
  margin-bottom: 0;
  font-family: 'Ubuntu', sans-serif;
  text-align:center;

}
#container_principal h2 {
  color:white;
  font-size: 2rem;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
}

#container_column {
  display:inline-flex;
  flex-direction:row;
  justify-content:space-around;
  align-items:flex-start;
  width:100vw;
  height:auto;
  flex-wrap:wrap;
}
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


/*
======================== css Accueil ========================
*/


.container_accueil {
  background-repeat: no-repeat;
  background-position: 20% 50%;
  background-size: cover;
  background-image: url('cloudimg1.jpg')  , linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
  background-blend-mode: overlay;
}
.container_accueil a{
  background-color:transparent;
  border:solid 1px #EEFBFB;
  padding: 5px;
  font-family: 'Ubuntu', sans-serif;
  color:#EEFBFB;
  font-size:1.2rem;
  margin:10px 20px;
  transition:all 0.4s;
  cursor:pointer;
  text-decoration:none;
}

.container_accueil a:hover{
  background-color:#EEFBFB;
  border:solid 1px #12232E;
  color:#12232E;
}

/*
======================== css Produit ========================
*/


/* Section 1 */

.container_produit {
  background-repeat: no-repeat;
  background-position: 20% 50%;
  background-size: cover;
  background-image: url('cloud2.jpg')  , linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
  background-blend-mode: overlay;
}


/* Section 2 */
.container_presentation_produit {
  background-color:#007CC7;
  flex-direction:column;
}

.container_presentation_produit p {
   color:#EEFBFB;
    font-family: 'Ubuntu', sans-serif;
}
/* Section 3 */

.container_avantages_produit {
  background-color:#12232E;
}

.avantages_produit > h2 {
  flex-basis:100%;
/*   premet de revenir à la ligne  */
  text-align:center;
}



.avantages_produit .carte {
  flex-basis: 20%;
  background-color:#EEFBFB;
  display:flex;
  flex-direction:column;
  border-radius:15px;
  padding:20px;
  min-width:250px;
  margin:20px;
}

.avantages_produit .carte i {
  font-size: 4rem;
  text-align:center;
  color:#4DA8DA;
  margin: 0 auto 25px;
  align-self:start;
  
}

.avantages_produit .carte span {
  font-size: 1.2rem;
  text-align:center;
  color:#12232E;
   font-family: 'Lato', sans-serif;
  font-weight:700;
}

.avantages_produit .carte p {
  font-size: 1rem;
  text-align:justify;
  color:#12232E;
   font-family: 'Lato', sans-serif;
  font-weight:500;
  height:100px;
}
/* Responsive */
@media screen and (min-width:1080px) {
  .avantages_produit .carte p {
  opacity:0;
}
  .avantages_produit .carte * {
  transform:translateY(60px);
  transition: all 0.4s;
}

.avantages_produit .carte:hover * {
  transform:translateY(0px);
  opacity:1;
}
}

/*
======================== css Nous ========================
*/

/* Section 1 */
.container_nous {
  background-repeat: no-repeat;
  background-position: 20% 50%;
  background-size: cover;
  background-image: url('https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg')  , linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
  background-blend-mode: overlay;
}

/* Section 2 */
.presentation_equipe > p {
  color:#EEFBFB;
  padding : 0 20%;
}
.presentation_equipe .carte_equipe {
  flex-basis: 20%;
  background-color:#EEFBFB;
  display:flex;
  flex-direction:column;
  border-radius:15px;
  padding:20px;
  min-width:250px;
  margin:20px;
}

.presentation_equipe .carte_equipe i {
  font-size: 4rem;
  text-align:center;
  color:#4DA8DA;
  margin: 0 auto 25px;
  align-self:start;
  
}

.presentation_equipe .carte_equipe span {
  font-size: 1.2rem;
  text-align:center;
  color:#12232E;
   font-family: 'Lato', sans-serif;
  font-weight:700;
}

.presentation_equipe .carte_equipe p {
  font-size: 1rem;
  text-align:justify;
  color:#12232E;
   font-family: 'Lato', sans-serif;
  font-weight:500;
  height:100px;
}
.presentation_equipe .carte_equipe {
  height:  300px;
/*   permet de centrer l'image et de ne pas la déformer*/
  background-size:cover;
  background-position:center;
/*   afin de pouvoir mettre le cartouche en bas de la carte (position absolute) */
  position:relative;
/*   pour ne pas voir le cartouche sortir de la carte */
  overflow:hidden;
/*   effet noir et blanc des images */
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
  transition:filter 0.4s;
}
.presentation_equipe .carte_equipe:hover {
 -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
    filter: grayscale(0%);
}
/* ce selecteur me permet de choisir la premiere carte  qui est le troisieme element de ma div*/
.presentation_equipe .carte_equipe:nth-child(3) {
  background-image:url('https://cdn.pixabay.com/photo/2017/09/03/09/16/baby-2709666_960_720.jpg')
}

/* ce selecteur me permet de choisir la deuxieme carte */
.presentation_equipe .carte_equipe:nth-child(4) {
  background-image:url('https://cdn.pixabay.com/photo/2015/07/29/00/08/photographer-865295_960_720.jpg')
}

/* ce selecteur me permet de choisir la troisieme carte */
.presentation_equipe .carte_equipe:nth-child(5) {
  background-image:url('https://cdn.pixabay.com/photo/2015/09/08/17/35/man-930397_960_720.jpg')
}

/* selection de la div directement enfant de carte_equipe pour en faire un cartouche*/
.presentation_equipe .carte_equipe > div {
  background:#EEFBFB;
  position:absolute;
  bottom:0;
  width:100%;
  height:auto;
  left:0;
  padding: 20px;
  opacity:0;
  transform:translatey(20px);
  transition:all 0.4s;
}

.presentation_equipe .carte_equipe:hover > div {
  opacity:1;
  transform:translatey(0px);
}

/*
======================== css Contact ========================
*/

/* Section 1 */
.container_contact {
  background-repeat: no-repeat;
  background-position: 20% 50%;
  background-size: cover;  
  background-image: url('https://cdn.pixabay.com/photo/2016/02/07/21/03/computer-1185626_960_720.jpg')  , linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
  background-blend-mode: overlay;
}
/* Section 2 */
.nous_contacter {
  background-color:#12232E;
}
/* on selectionne uniquement les inputs avec l'attribut typequi a la valeur text */
.nous_contacter form input[type="text"],.nous_contacter form textarea {
  background-color:#12232E;
  border:none;
   border-bottom:solid 1px #EEFBFB;
/*   les inputs prendrons 100% de la largeur moins le margin pour rester dans le container */
  width:calc(100% - 50px);
  padding: 5px;
  font-family: 'Ubuntu', sans-serif;
  color:#EEFBFB;
  margin:10px 20px;
  line-height:0.5rem;
/*   supprime le border quand on ecris dans les inputs */
  outline: none;

}

/* on ajuste le container pour centrer son contenu */
.nous_contacter #container_column {
  align-items:center;
}

.nous_contacter form input[type="submit"]{
  background-color:#12232E;
  border:solid 1px #EEFBFB;
  padding: 5px;
  font-family: 'Ubuntu', sans-serif;
  color:#EEFBFB;
  margin:10px 20px;
  transition:all 0.4s;
  cursor:pointer;
}

.nous_contacter form input[type="submit"]:hover{
  background-color:#EEFBFB;
  border:solid 1px #12232E;
  color:#12232E;
}



/* responsive */

@media screen and (min-width:768px) {
/*   on selectionne tous les enfant direct (l'iframe et le formulaire) */
  .nous_contacter #container_column > * {
    width:50%;
    }
  
  .nous_contacter #container_column > iframe {
    height:100vh;
    }
  }

@media screen and (max-width:767px) {
/*   on selectionne tous les enfant direct (l'iframe et le formulaire) */
  .nous_contacter #container_column > * {
    width:80%;
    }
  
  .nous_contacter #container_column > iframe {
    width:100vw;
    }
  }
/* Section caché */

.section_cachee {
  background:#4DA8DA;
  position:fixed;
  top:100%;
  left:0;
  flex-direction:column;
  transition:all 0.4s;
}


.section_cachee.ouverte {

  top:0%;

}

.section_cachee p{
  color:#EEFBFB;
}
.section_cachee img{
  border-radius:50%;
}
/* Section heure */
#section_heure {
  position:fixed;
  right:0;
  top:0;
  height:100vh;
  width:200px;
  background-color:#EEFBFB;
  transform:translateX(100%);
}

#section_heure.ouverte {
  transform:translateX(0%);
}

#section_heure p {
  font-family: 'Ubuntu', sans-serif;
  color:#12232E;
  padding:10px;
}


.btn_ouvrir {
  position:absolute;
  left:0;
  top:20%;
  height:50px;
  width:50px;
  background-color:#EEFBFB;
  transform: translateX(-100%);
  border-top-left-radius: 25px;
  border-bottom-left-radius:25px;
  /*   permet de mettre la main a la place de l'icone souris */
  cursor:pointer;
}
#section_heure .btn_ouvrir .fa-times {
  display:none;
}
#section_heure.ouverte .btn_ouvrir .fa-times {
  display:block;
}
#section_heure.ouverte .btn_ouvrir .fa-clock {
  display:none;
}
.btn_ouvrir i{
  color: #007CC7;
  line-height:50px;
  font-size:30px;
  width:100%;
  text-align:center;
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
