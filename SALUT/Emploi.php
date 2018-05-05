<?php
 session_start();

if(isset($_POST["Ok"]))
{
$TitreOffre = isset($_POST['TitreOffre'])? $_POST['TitreOffre']:"";
$AuteurOffre = isset($_POST['AuteurOffre'])? $_POST['AuteurOffre']:"";
$DescOffre = isset($_POST['DescOffre'])? $_POST['DescOffre']:"";

$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');

$rqt = "INSERT INTO `offre` (`Num_offre`, `Titre`, `Description`, `Nom_Auteur`) VALUES (NULL, '$TitreOffre', '$DescOffre', '$AuteurOffre');";

$bdd->query($rqt);
}

 $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
 $requ = "SELECT * FROM offre";
 $jack0 = $bdd->query($requ);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Emploi</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0px;      
      border-radius: 0;
      font-size:16px;
      font-family: 'Poppins', serif;
      font-weight: 400;
      -webkit-font-smoothing: antialiased; 
      -moz-osx-font-smoothing: grayscale; 
      word-wrap: break-word; 
    }

    .contenuslt{
    background-color: #DDDDDD;
    color: #000000;
    font-size: 11pt;
    font-family: "Poppins";
    margin: 0px;
    padding: 20px;
    }
 
    .boutonsPromptslt{
     text-align: center;
    }
 
    .okslt, .annulerslt{
    width: 80px;
    }
 
    .okslt{
     margin-right: 10px;
     margin-left: 0px;
    margin-top: 0px;
    margin-bottom: 0px;
    }
 
    .annulerslt{
    margin-right: 0px;
    margin-left: 10px;
    margin-top: 0px;
    margin-bottom: 0px;
    }

    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 700px;
      padding-left: 80px;
    }

    .jj{
      color:#FFA600;
    }

    .photo
    {
      padding-top: 5px;
    }

    .jumbotron{
      background-color: #FF007F;
      color: white;

      font-family: 'Poppins', serif;
    }

    .container{
      font-family: 'Poppins', serif;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 10px;
    }
    </style>

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img class="photo" src="images/logo.png" size="100%" height="45" >      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./Accueil.php" title="">Accueil</a></li>
        <li><a href="./Reseau.php">Mon réseau</a></li>
        <li><a href="./Profil1.php" title="">Mon profil</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Messagerie</a></li>
        <li class="active"><a href="./Emploi.php">Emploi</a></li>
        <li><a href="./Administrateur.php"><?php if($_SESSION['role']==1){echo "Administrateur";}?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="w3-display-container w3-content w3-wide" id="home">
  <img src="images/fond_emploi.jpg" width="1349" height="500">
</header>

<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Offres d'Emplois</h1>
          <p>Basées sur des critères qui peuvent vous interesser</p>
        </div>
          <div class="container">
          <br><button type="button" class="btn btn-warning btn-lg" href="#" onclick="ajouterOffre()">Ajouter une offre</button>
<!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond" class="fond">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt" class="slt">
 
  <div class="contenuslt">
    <!-- debut - elements de la boite de dialogue -->


    <form method="post" action="Emploi.php">
    Titre de l'offre &nbsp;:
    <input type="text" name="TitreOffre" value="" id="idText" size="40" maxlength="60" /><br /><br>
    Proposé par&nbsp;:
    <input type="text" name="AuteurOffre" value="" id="idProp" size="40" maxlength="1000" /><br /><br>
    Description&nbsp;:
    <input type="text" name="DescOffre" value="" id="idProp" size="40" maxlength="60" /><br /><br>
 
    <div class="boutonsPromptSlt">
      <br/>
      <input type="submit" value="Ok" id="idOk" class="okslt" name="Ok"/>
      <input type="button" value="Annuler" id="idAnnuler" class="annulerslt" onclick="clicAnnuler()" />
    </div>
    </form>
 
  </div>
  </div>

        </div>
      </div>
            <div class="container">
        <!-- Example row of columns -->
               <div class="row">
                

      <?php while($donnees = $jack0->fetch())
      {
          $_SESSION["titre_offre"] = $donnees['Titre'];
          $_SESSION["des_offre"] = $donnees['Description'];
          $_SESSION["nom_auteur_offre"] = $donnees['Nom_Auteur'];
      ?>
            <div class="col-md-4">
            <h2><?php echo $_SESSION["titre_offre"];?></h2>
            <h4 style="font-weight: bold;">publié par : <?php echo $_SESSION["nom_auteur_offre"];?></h4>
            <p><?php echo $_SESSION["des_offre"];?></p>
            <p><a class="jj" href="#" role="button">Postuler &raquo;</a></p></div>
            <?php
          }
          ?>
          </div>
        </div>
      </div> <br><!-- /container -->

    </main>

<footer class="container-fluid text-center">
  <p>@PoolCorporation</p>
</footer>


<script>

  clicAnnuler();


 function fermeBoite()
{
  document.getElementById("monPrompt").style.display = "none";
  document.getElementById("idFond").style.display = "none";
}

function ajouterOffre()
{
  document.getElementById("monPrompt").style.display = "block";
  document.getElementById("idFond").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk()
{
  fermeBoite();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler()
{
  fermeBoite();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}
  </script>

</body>
</html>

