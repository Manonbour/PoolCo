<?php
 session_start();
 
 if(isset($_POST["Okadmin"]))
{
$nom = isset($_POST['nom'])? $_POST['nom']:"";
$prenom = isset($_POST['prenom'])? $_POST['prenom']:"";
$email = isset($_POST['mail'])? $_POST['mail']:"";
$id = $_SESSION["id"];
$nom1 = isset($_POST['nom'])? $_POST['nom']:"";
$prenom1 = isset($_POST['prenom'])? $_POST['prenom']:"";
$email1 = isset($_POST['mail'])? $_POST['mail']:"";
$id1 = $_SESSION["id1"];


$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
$rqt2 = "SELECT MAX(id) FROM utilisateurs";
$rqt4 = "SELECT MAX(id) FROM Ami";
$jack = $bdd->query($rqt2);
$jack4 = $bdd->query($rqt4);
$donnees = $jack->fetch();
$donnees1 = $jack4->fetch();
$nb = $donnees[0]+1;
$nb1 = $donnees1[0]+1;
$rqt = "INSERT INTO utilisateurs(id, nom, prenom, mail,Photo) VALUES ('$nb', '$nom','$prenom','$email','images/pardef.png')";
$bdd->query($rqt);
$rqt1 = "INSERT INTO Ami(id, Nom, Prénom, Mail,Photo) VALUES ('$nb1', '$nom1','$prenom1','$email1','images/pardef.png')";
$bdd->query($rqt1);




}

 if(isset($_GET['noom']))
 {
$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');

//$id5 = $donnees5['id'];
$blaze = $_GET['noom'];

//$_SESSION["id5"] = $donnees5['id'];
$rqt5 = "DELETE FROM `utilisateurs` WHERE nom= '$blaze'";
$bdd->query($rqt5);

//$donnees5 = $jack5->fetch();


$rqt6 = "DELETE FROM `Ami` WHERE nom= '$blaze'";
$bdd->query($rqt6);
/*$jack6 = $bdd->query($rqt6);

$donnees6 = $jack6->fetch();
$id6 = $donnees6['id'];

$_SESSION["id6"] = $donnees6['id'];*/

 }


 if(isset($_GET['noom']))
{ 
  $t=$_SESSION["abc"];
  $noom = $_GET['noom'];
    $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
    $rqt = "UPDATE Ami SET estAmi=1 WHERE Id_Utili='$t' AND Nom='$noom' AND estAmi=0";
    $rep = $bdd->query($rqt);
}


 $t=$_SESSION["abc"];
 $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
 $reponse0 = "SELECT Ami.Id, Ami.Nom,Ami.Prénom,Ami.Photo, Ami.Naissance, Ami.Mail, Ami.estAmi FROM Ami INNER JOIN utilisateurs WHERE Ami.Id_Utili=utilisateurs.id AND Ami.estAmi=0";
 $reponse1 = "SELECT Ami.Id, Ami.Nom,Ami.Prénom,Ami.Photo, Ami.Naissance, Ami.Mail, Ami.estAmi  FROM Ami INNER JOIN utilisateurs WHERE Ami.Id_Utili=utilisateurs.id  AND Ami.estAmi=1";
 $reponse3 = "SELECT * FROM `utilisateurs`";
 $jack0 = $bdd->query($reponse0);
 $jack1 = $bdd->query($reponse1);
 $jack3 = $bdd->query($reponse3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gérer les utilisateurs</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js
"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js
"></script>

<script>
  /* Boite de dialogue modifs intro*/

clicAnnuleradmin();

function fermeBoiteadmin()
{
  document.getElementById("monPrompt").style.display = "none";
  document.getElementById("idFond").style.display = "none";
}

function ouvreBoiteadmin()
{
  document.getElementById("monPrompt").style.display = "block";
  document.getElementById("idFond").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/


 
 
function clicAnnuleradmin()
{
  fermeBoiteadmin();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}

</script>


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

    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {
      height: 600px;
      padding-left: 80px;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

        .jj2 
    {
      background: #e3e3e3;
      border: 1px solid #ccc;
      color: #333;
      font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
      font-size: 10px;
      font-weight: bold;
      padding: 8px 0 9px;
      text-align: center;
      width: 60px;
      height: 40px;
      cursor:pointer;
      margin:0px 0px 10px 10px;
      text-shadow: 0px 1px 0px #fff;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      -moz-box-shadow: 0px 0px 2px #fff inset;
      -webkit-box-shadow: 0px 0px 2px #fff inset;
      box-shadow: 0px 0px 2px #fff inset;
    }
    
    .photo
    {
      padding-top: 5px;
    }

    .photopro
    {
      overflow:hidden;
      -webkit-border-radius:50px;
      -moz-border-radius:50px;
      border-radius:50px;
      width:90px;
      height:90px;
      margin-right: 20px;
      margin-left: 100px;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    .titrePromptadmin{
 background-color: #FF007F;
 color: #000000;
 font-weight: bold;
 font-size: 15pt;
 font-family: Poppins;
 text-align: center;
}
 
.contenuPromptadmin{
 background-color: #DDDDDD;
 color: #000000;
 font-size: 11pt;
 font-family: "Poppins";
 margin: 0px;
 padding: 20px;
}
 
.boutonsPromptadmin{
 text-align: center;
}
 
.okadmin, .annuleradmin{
 width: 80px;
}
 
.okadmin{
 margin-right: 10px;
 margin-left: 0px;
 margin-top: 0px;
 margin-bottom: 0px;
}
 
.annuleradmin{
 margin-right: 0px;
 margin-left: 10px;
 margin-top: 0px;
 margin-bottom: 0px;
}

.ajout-section{
  text-align: center;
}

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 10px;
    }

  </style>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura
" rel="stylesheet">
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
        <li><a href="./Emploi.php">Emploi</a></li>
        <li class="active"><a href="./Administrateur.php">Administrateur</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="w3-display-container w3-content w3-wide" id="home">
  <img src="images/fond-master.jpg" width="1280" height="500">
</header>

  



<h2>Utilisateurs</h2>    
  <?php
 while ($donnees = $jack3->fetch())
 {
  $_SESSION["nom_utilisateur"] = $donnees['nom'];
  $_SESSION["prénom_utilisateur"] = $donnees['prenom'];
  $_SESSION["photo_utilisateur"] = $donnees['Photo'];
  $_SESSION["naissance_utilisateur"] = $donnees['naissance'];
  $_SESSION["mail_utilisateur"] = $donnees['mail'];
 
  $image = $donnees['Photo'];
    ?>
    <img class="photopro" src="<?php echo $image; ?>" alt="Avatar">
    <span style="width:60px"></span>
    <a href="./ProfilAmi.php?immg=<?php echo $image;?>&noom=<?php echo $_SESSION["nom_utilisateur"]?>&pree=<?php echo $_SESSION["prénom_utilisateur"]?>&daate=<?php echo $_SESSION["naissance_utilisateur"]?>&maail=<?php echo $_SESSION["mail_utilisateur"]?>" title=""><?php echo $_SESSION["prénom_utilisateur"]; echo " "; echo $_SESSION["nom_utilisateur"];?></a>
  <!-- <form method="get" action="Reseau.php">-->
    
<a href="./Administrateur.php?noom=<?php echo $_SESSION["nom_utilisateur"]?>"> <input type="submit" name="supprimer" value="Supprimer" class="jj2"></input></a>
  </form>
    <?php
  }
  ?>
  <div class= "ajout-section">
   <div class="container">
<div class="row">
  <div class="col-md-10 col-lg-8">
  <br><button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoiteadmin()">Ajouter un membre</button>
<!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond" class="fond">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt" class="conteneurPrompt">
 
  <div class="titrePromptadmin">
       Ajout d'un membre
  </div>
 
  <div class="contenuPromptadmin">
    <!-- debut - elements de la boite de dialogue -->


<form method="post" action="Administrateur.php">
    Nom&nbsp;:
    <input type="text" name="nom" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Prenom&nbsp;:
    <input type="text" name="prenom" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Email&nbsp;:
    <input type="email" name="mail" value="Votre texte" id="idText" size="20" maxlength="100" /><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPromptadmin">
      <br />
      <input type="submit" value="Ok"  name="Okadmin" />
      <input type="button" value="Annuler" id="idAnnuler" class="annuleradmin" onclick="clicAnnuleradmin()" />
    </div>
 </form>
  </div>
 
</div>
<!-- Fin - Boite de dialogue -->

      </div>    
  </div>
</div>
</div>


<footer class="container-fluid text-center">
  <p>@PoolCorporation</p>
</footer>

</body>
</html>