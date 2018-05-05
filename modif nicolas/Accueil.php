<?php
session_start();

$date = date("Y-m-d");
$heure = date("H:i:s");
$id=$_SESSION["abc"];
$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');

if(isset($_GET['idpubli']))
{
$idpubli = $_GET['idpubli'];


  $rqtt = "INSERT INTO `like` (id_publi, id_utili) VALUES ('$idpubli', '$id')";
  $bdd->query($rqtt);
  
}

if(isset($_POST["Env"]))
{
  $publitext = isset($_POST['TEX'])? $_POST['TEX']:"";
  $rqt = "INSERT INTO `Publication` (`Texte`, `Date`,`Heure`, `Id_Un`) VALUES ('$publitext', '$date','$heure','$id')";
  $bdd->query($rqt);
  $_SESSION["txt"]=$_POST['TEX'];
}

$requ = "SELECT * FROM utilisateurs INNER JOIN Publication WHERE utilisateurs.id=Publication.Id_Un ORDER BY Publication.Date DESC, Publication.Heure DESC";
$jack=$bdd->query($requ);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accueil</title>
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

    .row.content {
      height: 100%;
    }

    .area{
      border: dotted 4px pink;
      height: 100px;
      margin-bottom: 20px;
      margin-top: 10px;
    }
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 1100px;
    }
    
    .photo
    {
      padding-top: 5px;
    }

    .jj 
    {
      background: #e3e3e3;
      border: 1px solid #ccc;
      color: #333;
      font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
      font-size: 14px;
      font-weight: bold;
      padding: 8px 0 9px;
      text-align: center;
      width: 150px;
      cursor:pointer;
      margin:0px 20px 10px 690px;
      text-shadow: 0px 1px 0px #fff;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      -moz-box-shadow: 0px 0px 2px #fff inset;
      -webkit-box-shadow: 0px 0px 2px #fff inset;
      box-shadow: 0px 0px 2px #fff inset;
    }

    .jj2 
    {
      background: #e3e3e3;
      border: 1px solid #ccc;
      color: #333;
      font-family: "Trebuchet MS", "Myriad Pro", sans-serif;
      font-size: 14px;
      font-weight: bold;
      padding: 8px 0 9px;
      text-align: center;
      width: 100px;
      cursor:pointer;
      margin:0px 20px 10px 10px;
      text-shadow: 0px 1px 0px #fff;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      -moz-box-shadow: 0px 0px 2px #fff inset;
      -webkit-box-shadow: 0px 0px 2px #fff inset;
      box-shadow: 0px 0px 2px #fff inset;
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
        <li class="active"><a href="./Accueil.php" title="">Accueil</a></li>
        <li><a href="./Reseau.php">Mon réseau</a></li>
        <li><a href="./Profil1.php" title="">Mon profil</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Messagerie</a></li>
        <li><a href="./Emploi.php">Emploi</a></li>
        <li><a href="./Administrateur.php">Administrateur</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img src="images/img.png" width="1280" height="450">
</header>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p></p>
      <h4 class="w3-center">Mon profil</h4>
      <?php $image=$_SESSION["Photo"];?>
      <p class="w3-center"><a href="./Profil1.php"><img src="<?php echo $image; ?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></a></p>
      <p><?php echo $_SESSION["prenom"]; echo" "; echo $_SESSION["nom"];?></p>
    </div>


    <div class="col-sm-8 text-left">
      <hr>
      <h3>Exprimez-vous</h3>
        <form method="post" action="Accueil.php">
          <textarea type="text" name="TEX" class="area" id="publi" rows="3" cols="135">Comment vous sentez-vous aujourd'hui ?</textarea>
          <input type="submit" class="jj" name="Env" value="Envoyer" id="Envo2">

      <h3>Publications : </h3>
      <hr>
      <?php while ($donnees=$jack->fetch())
      {

        $test = $donnees['Id'];
        $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
        $requ2 = "SELECT COUNT(DISTINCT id_utili) FROM `publication` INNER JOIN `like` WHERE '$test'=like.id_publi ";
        $jackda=$bdd->query($requ2);
        $donneesda=$jackda->fetch();
        $_SESSION["Id"] = $donnees['Id'];
        $aller=$donneesda[0];
        $imgg=$donnees['Photo'];
        ?> 
        <img src="<?php echo $imgg?>" alt="Avatar" style="width:60px">
        <span style="font-weight: bold"><?php echo $donnees['prenom']; echo " "; echo $donnees['nom'];?></span><span> dit : </span><br><br>
        <?php echo $donnees['Texte'];?>
        <br><br>
        <!--<form action="Accueil.php" method="post">-->
        </form>
        <a href="./Accueil.php?idpubli=<?php echo $_SESSION["Id"]?>" > <input type="submit" name="ajouter" value="J'aime <?php echo $aller?>" class="jj2"><i class="fa fa-thumbs-up"></i></input></a>

        <button type="submit" class="jj2"><i class="fa fa-comment"></i>Commenter</button>
        <button type="submit" class="jj2"><i class="fa fa-comment"></i>Partager</button> 
        <p>Posté le : <?php echo $donnees['Date']; echo " "; echo $donnees['Heure']; ?></p>
        <hr><br>
        <?php } ?>
        <br>

        <br><br>
      </div>
    
  </div>
</div>

<footer class="container-fluid text-center">
  <p>@PoolCorporation</p>
</footer>

</body>
</html>
