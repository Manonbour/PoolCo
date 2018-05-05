<?php
session_start();

$date = date("Y-m-d");
$heure = date("H:i:s");
$id=$_SESSION["abc"];
$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');

if(isset($_GET['idpubli']))
{
  $idpubli = $_GET['idpubli'];
  $rqtt = "INSERT INTO `Like` (id_publi, id_utili) VALUES ('$idpubli', '$id')";
  $bdd->query($rqtt);
  
}

if(isset($_POST["Env"]))
{
  $publitext = isset($_POST['TEX'])? $_POST['TEX']:"";
  $filename = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_FILENAME);
  $type = pathinfo($_FILES['fileToUpload']['type'], PATHINFO_FILENAME);
  if($type=='jpeg'){$type='jpg';}
  $chemin = "images/".$filename.".".$type;
  $rqt = "INSERT INTO `Publication` (`Texte`, `Date`,`Heure`, `Id_Un`, `URL`) VALUES ('$publitext', '$date','$heure','$id', '$chemin')";
  $bdd->query($rqt);
  $_SESSION["txt"]=$_POST['TEX'];
}$chemin=0;

if(isset($_POST["Ok"]))
{
$TitreEvent = isset($_POST['TitreEvent'])? $_POST['TitreEvent']:"";
$LieuEvent = isset($_POST['LieuEvent'])? $_POST['LieuEvent']:"";
$DateEvent= isset($_POST['DateEvent'])? $_POST['DateEvent']:"";
$HeureEvent= isset($_POST['HeureEvent'])? $_POST['HeureEvent']:"";
$DescEvent= isset($_POST['DescEvent'])? $_POST['DescEvent']:"";

$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');

$rqt = "INSERT INTO `Event` (`id_event`, `Titre`, `Lieu`, `Date`, `Heure`,`Description`,`id_posteur`) VALUES (NULL, '$TitreEvent', '$LieuEvent', '$DateEvent', '$HeureEvent','$DescEvent', '$id');";

$bdd->query($rqt);
}

$requ = "SELECT * FROM utilisateurs INNER JOIN Publication WHERE utilisateurs.id=Publication.Id_Un ORDER BY Publication.Date DESC, Publication.Heure DESC";
$jack=$bdd->query($requ);

$requevent = "SELECT * FROM utilisateurs INNER JOIN Event WHERE utilisateurs.id=Event.id_posteur ORDER BY Event.Date DESC";
$jackevent=$bdd->query($requevent);

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
      height: 2700px;
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

    .titrept{
 background-color: #FF007F;
 color: #000000;
 font-weight: normal;
 font-size: 15pt;
 font-family: Poppins;
 text-align: center;
}
 
.contenupt{
 background-color: #DDDDDD;
 color: #000000;
 font-size: 11pt;
 font-family: "Poppins";
 margin: 0px;
 padding: 20px;
}
 
.boutonspt{
 text-align: center;
}
 
.okpt, .annulerpt{
 width: 80px;
}
 
.okpt{
 margin-right: 10px;
 margin-left: 0px;
 margin-top: 0px;
 margin-bottom: 0px;
}
 
.annulerpt{
 margin-right: 0px;
 margin-left: 10px;
 margin-top: 0px;
 margin-bottom: 0px;
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
        <li><a href="./Administrateur.php"><?php if($_SESSION['role']==1){echo "Administrateur";}?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
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
        <div class="tab-content">
        <div id="upload" class="tab-pane fade in active">
        <p>
        <form method="post" action="Accueil.php" enctype="multipart/form-data">
          <input id="fileToUpload" name="fileToUpload" type="file" multiple class="file-loading">
          <textarea type="text" name="TEX" class="area" id="publi" rows="3" cols="135" placeholder="Comment vous sentez-vous aujourd'hui ?"></textarea>
          <button type="button" class="btn btn-warning btn-lg" href="#" onclick="ajouterEvent()">Créer un événement</button>
          <input type="submit" class="btn btn-warning btn-lg" name="Env" value="Envoyer" id="Envo2"><hr></form></p></div></div>


          
          <div id="idFond" class="fond">
          &nbsp;
          </div> 
          <div id="monPrompt" class="pt">

            <div class="titrept">Votre événement</div>
 
              <div class="contenupt">
                <form method="post" action="Emploi.php">
                Titre de l'événement &nbsp;:
                <input type="text" name="TitreEvent" value="" id="idText" size="40" maxlength="60" /><br /><br>
                Lieu&nbsp;:
                <input type="text" name="LieuEvent" value="" id="idProp" size="40" maxlength="1000" /><br /><br>
                Date&nbsp;:
                <input type="Date" name="DateEvent" /><br /><br>
                Heure&nbsp;:
                <input type="time" name="HeureEvent" /><br /><br>
                Description&nbsp;:
                <input type="text" name="DescEvent" /><br /><br>
 
                <div class="boutonsPromptpt">
               <br/>
                <input type="submit" value="Ok" id="idOk" class="okpt" name="Ok"/>
                <input type="button" value="Annuler" id="idAnnuler" class="annulerpt" onclick="clicAnnuler()" />
                </div>
                </form>
 
              </div>
           </div>




      <h3>Publications : </h3>
      <hr>
      <?php while ($donnees=$jack->fetch())
      {
        $test = $donnees['Id'];
        $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', 'root');
        $requ2 = "SELECT COUNT(DISTINCT id_utili) FROM `Publication` INNER JOIN `Like` WHERE '$test'=Like.id_publi ";
        $jackda=$bdd->query($requ2);
        $donneesda=$jackda->fetch();
        $_SESSION["Id"] = $donnees['Id'];
        $aller=$donneesda[0];
        $imgg=$donnees['Photo'];
        $chemin=$donnees['URL'];
        ?>
        <div class="contenupt"> 
        <img src="<?php echo $imgg?>" alt="Avatar" style="width:60px">
        <span style="font-weight: bold"><?php echo $donnees['prenom']; echo " "; echo $donnees['nom'];?></span><span> dit : </span><br><br>
        <?php echo $donnees['Texte'];?><br>
        <img src="<?php echo $chemin?>"" alt="" width="500px">
        <br></div><br>
        <a href="./Accueil.php?idpubli=<?php echo $_SESSION["Id"]?>" > <input type="submit" name="ajouter" value="J'aime <?php echo $aller?>" class="jj2"><i class="fa fa-thumbs-up"></i></input></a>
        <button type="button" class="jj2"><i class="fa fa-comment"></i>Commenter</button>
        <button type="button" class="jj2"><i class="fa fa-comment"></i>Partager</button>         
        <p>Posté le : <?php echo $donnees['Date']; echo " "; echo $donnees['Heure'];?></p>
        <hr><br>
        <?php } ?>
        <br>
        <br><br>

        <h3>Événements : </h3>
        <hr>
        <?php while ($don=$jackevent->fetch())
        {
        $im=$don['Photo'];
        ?> 
        <img src="<?php echo $im?>" alt="Avatar" style="width:60px">
        <span> Nouvel événement de : </span><span style="font-weight: bold"><?php echo $don['prenom']; echo " "; echo $don['nom'];?></span><br><br>
        <p class="titrept"><?php echo $don['Titre'];?></p>
        <p class="contenupt">Le : <?php echo $don['Date'];?> <br> à <?php echo $don['Lieu'];?><br><br><?php echo $don['Description'];?></p>
        <br>
        <hr><br>
        <?php } ?>
        <br>
        <br>
      </div>
  </div>
</div>

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

function ajouterEvent()
{
  document.getElementById("monPrompt").style.display = "block";
  document.getElementById("idFond").style.display = "block";
}
  
function clicAnnuler()
{
  fermeBoite();
}

function readURL(input) 
{
     if (input.files && input.files[0]) 
     {
            var reader = new FileReader();
             
            reader.onload = function (e) 
            {
                $('#blah').attr('src', e.target.result);
            }
             
            reader.readAsDataURL(input.files[0]);
     }
}
     
    $("#imgInp").change(function()
    {
        readURL(this);
    });

  </script>

</body>
</html>
