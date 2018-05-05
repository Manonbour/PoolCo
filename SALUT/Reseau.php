<?php
 session_start();
 
 if(isset($_GET['noom']))
{ 
    $t=$_SESSION["abc"];
    $noom = $_GET['noom'];
    $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
    $rqt = "UPDATE ami SET estAmi=1 WHERE Id_Utili='$t' AND Nom='$noom' AND estAmi=0";
    $rep = $bdd->query($rqt);
}


 $t=$_SESSION["abc"];
 $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
 $reponse0 = "SELECT Ami.Id, Ami.Nom,Ami.Prénom,Ami.Photo, Ami.Naissance, Ami.Mail, Ami.estAmi FROM Ami INNER JOIN utilisateurs WHERE Ami.Id_Utili=utilisateurs.id AND utilisateurs.id=$t AND Ami.estAmi=0";
 $reponse1 = "SELECT Ami.Id, Ami.Nom,Ami.Prénom,Ami.Photo, Ami.Naissance, Ami.Mail, Ami.estAmi  FROM Ami INNER JOIN utilisateurs WHERE Ami.Id_Utili=utilisateurs.id AND utilisateurs.id=$t AND Ami.estAmi=1";
 $jack0 = $bdd->query($reponse0);
 $jack1 = $bdd->query($reponse1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mon réseau</title>
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
      width: 40px;
      height: 30px;
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
        <li class="active"><a href="#">Mon réseau</a></li>
        <li><a href="./Profil1.php" title="">Mon profil</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Messagerie</a></li>
        <li><a href="./Emploi.php">Emploi</a></li>
        <li><a href="./Administrateur.php"><?php if($_SESSION['role']==1){echo "Administrateur";}?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>

<header class="w3-display-container w3-content w3-wide" id="home">
  <img src="images/fond_reseau.jpg" width="1280" height="500">
</header>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left">
      <hr>

  <h2>Vos relations :</h2>    
  <?php
 while ($donnees = $jack1->fetch())
 {
  $_SESSION["id_ami"] = $donnees['Id'];
  $_SESSION["nom_ami"] = $donnees['Nom'];
  $_SESSION["prénom_ami"] = $donnees['Prénom'];
  $_SESSION["photo_ami"] = $donnees['Photo'];
  $_SESSION["naissance_ami"] = $donnees['Naissance'];
  $_SESSION["mail_ami"] = $donnees['Mail'];
  $_SESSION["estAmi"] = $donnees['estAmi'];
  $image = $_SESSION["photo_ami"];
    ?>
    
    <img class="photopro" src="<?php echo $image; ?>" alt="Avatar">
    <span style="width:60px"></span>
    <a href="./ProfilAmi.php?immg=<?php echo $image;?>&noom=<?php echo $_SESSION["nom_ami"]?>&pree=<?php echo $_SESSION["prénom_ami"]?>&daate=<?php echo $_SESSION["naissance_ami"]?>&maail=<?php echo $_SESSION["mail_ami"]?>" title=""><?php echo $_SESSION["prénom_ami"]; echo " "; echo $_SESSION["nom_ami"];?></a>
    <?php
  }
  ?><hr>


<h2>Vous connaissez peut-être :</h2>    
  <?php
 while ($donnees = $jack0->fetch())
 {
  $_SESSION["nom_ami"] = $donnees['Nom'];
  $_SESSION["prénom_ami"] = $donnees['Prénom'];
  $_SESSION["photo_ami"] = $donnees['Photo'];
  $_SESSION["naissance_ami"] = $donnees['Naissance'];
  $_SESSION["mail_ami"] = $donnees['Mail'];
  $_SESSION["estAmi"] = $donnees['estAmi'];
  $image = $_SESSION["photo_ami"];
    ?>
    <img class="photopro" src="<?php echo $image; ?>" alt="Avatar">
    <span style="width:60px"></span>
    <a href="./ProfilAmi.php?immg=<?php echo $image;?>&noom=<?php echo $_SESSION["nom_ami"]?>&pree=<?php echo $_SESSION["prénom_ami"]?>&daate=<?php echo $_SESSION["naissance_ami"]?>&maail=<?php echo $_SESSION["mail_ami"]?>" title=""><?php echo $_SESSION["prénom_ami"]; echo " "; echo $_SESSION["nom_ami"];?></a>
  <!-- <form method="get" action="Reseau.php">-->
    
<a href="./Reseau.php?noom=<?php echo $_SESSION["nom_ami"]?>"><input type="submit" name="ajouter" value="Ajouter" class="jj2"></input></a>
  </form>
    <?php
  }
  ?>

      </div>    
  </div>
</div>



<footer class="container-fluid text-center">
  <p>@PoolCorporation</p>
</footer>

</body>
</html>
