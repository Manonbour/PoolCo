<?php
 session_start();
if(isset($_POST["Ok"]))
{
$nom = isset($_POST['nom'])? $_POST['nom']:"";
$prenom = isset($_POST['prenom'])? $_POST['prenom']:"";
$email = isset($_POST['mail'])? $_POST['mail']:"";
$id = $_SESSION["id"];
$naissance = isset($_POST['naissance'])? $_POST['naissance']:"";

$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
$rqt = "UPDATE utilisateurs SET nom='$nom', prenom='$prenom', mail='$email', naissance='$naissance' WHERE id='$id'";
$bdd->query($rqt);
$_SESSION["nom"]=$_POST['nom'];
$_SESSION["prenom"]=$_POST['prenom'];
$_SESSION["mail"]=$_POST['mail'];
$_SESSION["naissance"]=$_POST['naissance'];

}

if(isset($_POST["Ok2"]))
{
  $apropos = isset($_POST['apropos'])? $_POST['apropos']:"";
  $id = $_SESSION["id"];
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
  $rqt = "UPDATE profession SET apropos='$apropos' WHERE id='$id'";
  $bdd->query($rqt);
  $_SESSION["apropos"]=$_POST['apropos'];
  
}



if(isset($_POST["Ok4"]))
{
  $diplome3 = isset($_POST['diplome3'])? $_POST['diplome3']:"";
  $universite3 = isset($_POST['universite3'])? $_POST['universite3']:"";
  $date_val3 = isset($_POST['date_val3'])? $_POST['date_val3']:"";
  $descri3 = isset($_POST['descri3'])? $_POST['descri3']:"";
  $id = $_SESSION["id"];
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
  $rqt = "UPDATE profession SET diplome3='$diplome3', universite3='$universite3', date_val3='$date_val3', descri3='$descri3' WHERE id='$id'";
  $bdd->query($rqt);
  $_SESSION["diplome3"] = $_POST['diplome3'];
  $_SESSION["universite3"] = $_POST['universite3'];
  $_SESSION["date_val3"] = $_POST['date_val3'];
  $_SESSION["descri3"] = $_POST['descri3'];
}

if(isset($_POST["Ok5"]))
{
  $diplome3 = isset($_POST['diplome2'])? $_POST['diplome2']:"";
  $universite3 = isset($_POST['universite2'])? $_POST['universite2']:"";
  $date_val3 = isset($_POST['date_val2'])? $_POST['date_val2']:"";
  $descri3 = isset($_POST['descri2'])? $_POST['descri2']:"";
  $id = $_SESSION["id"];
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
  $rqt = "UPDATE profession SET diplome2='$diplome3', universite2='$universite3', date_val2='$date_val3', descri2='$descri3' WHERE id='$id'";
  $bdd->query($rqt);
  $_SESSION["diplome2"] = $_POST['diplome2'];
  $_SESSION["universite2"] = $_POST['universite2'];
  $_SESSION["date_val2"] = $_POST['date_val2'];
  $_SESSION["descri2"] = $_POST['descri2'];
}


if(isset($_POST["Ok6"]))
{
  $diplome3 = isset($_POST['diplome1'])? $_POST['diplome1']:"";
  $universite3 = isset($_POST['universite1'])? $_POST['universite1']:"";
  $date_val3 = isset($_POST['date_val1'])? $_POST['date_val1']:"";
  $descri3 = isset($_POST['descri1'])? $_POST['descri1']:"";
  $id = $_SESSION["id"];
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
  $rqt = "UPDATE profession SET diplome1='$diplome3', universite1='$universite3', date_val1='$date_val3', descri1='$descri3' WHERE id='$id'";
  $bdd->query($rqt);
  $_SESSION["diplome1"] = $_POST['diplome1'];
  $_SESSION["universite1"] = $_POST['universite1'];
  $_SESSION["date_val1"] = $_POST['date_val1'];
  $_SESSION["descri1"] = $_POST['descri1'];
}

if(isset($_POST["Ok3"]))
{
  $nom_poste2 = isset($_POST['nom_poste2'])? $_POST['nom_poste2']:"";
  $entreprise2 = isset($_POST['entreprise2'])? $_POST['entreprise2']:"";
  $date_debut2 = isset($_POST['date_debut2'])? $_POST['date_debut2']:"";
  $date_fin2 = isset($_POST['date_fin2'])? $_POST['date_fin2']:"";
  $desc2 = isset($_POST['desc2'])? $_POST['desc2']:"";
  $id = $_SESSION["id"];
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
  $rqt = "UPDATE profession SET nom_poste2='$nom_poste2', entreprise2='$entreprise2', date_debut2='$date_debut2', date_fin2='$date_fin2', desc2='$desc2' WHERE id='$id'";
  $bdd->query($rqt);
  $_SESSION["nom_poste2"] = $_POST['nom_poste2'];
  $_SESSION["entreprise2"] = $_POST['entreprise2'];
  $_SESSION["date_debut2"] = $_POST['date_debut2'];
  $_SESSION["date_fin2"] = $_POST['date_fin2'];
  $_SESSION["desc2"] = $_POST['desc2'];
}


  if(isset($_POST["Ok7"]))
{
  $nom_poste2 = isset($_POST['nom_poste1'])? $_POST['nom_poste1']:"";
  $entreprise2 = isset($_POST['entreprise1'])? $_POST['entreprise1']:"";
  $date_debut2 = isset($_POST['date_debut1'])? $_POST['date_debut1']:"";
  $date_fin2 = isset($_POST['date_fin1'])? $_POST['date_fin1']:"";
  $desc2 = isset($_POST['desc1'])? $_POST['desc1']:"";
  $id = $_SESSION["id"];
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
  $rqt = "UPDATE profession SET nom_poste1='$nom_poste2', entreprise1='$entreprise2', date_debut1='$date_debut2', date_fin1='$date_fin2', desc1='$desc2' WHERE id='$id'";
  $bdd->query($rqt);
  $_SESSION["nom_poste1"] = $_POST['nom_poste1'];
  $_SESSION["entreprise1"] = $_POST['entreprise1'];
  $_SESSION["date_debut1"] = $_POST['date_debut1'];
  $_SESSION["date_fin1"] = $_POST['date_fin1'];
  $_SESSION["desc1"] = $_POST['desc1'];
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Mon Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <!-- Font -->
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
  
  <!-- Stylesheets -->
  
  <link href="common-css/bootstrap.css" rel="stylesheet">
  
  <link href="common-css/ionicons.css" rel="stylesheet">
  
  <link href="common-css/fluidbox.min.css" rel="stylesheet">
  
  <link href="css/styles.css" rel="stylesheet">
  
  <link href="css/responsive.css" rel="stylesheet">

  
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
      <img class="photo" src="images/logo.png" style="padding-top: 5px" height="45px" > 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./Accueil.php">Accueil</a></li>
        <li><a href="./Reseau.php">Mon réseau</a></li>
        <li class="active" ><a href="#">Mon profil</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Messagerie</a></li>
        <li><a href="./Emploi.php">Emploi</a></li>
        <li><a href="./Administrateur.php">Administrateur</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-md-10 col-lg-8">
          <div class="intro">
            <div class="profile-img">
              <?php $image = $_SESSION["Photo"];?>
              <img src="<?php echo $image; ?>" height="200" alt=""></div>
            <h2><b> <?php echo $_SESSION["prenom"]; echo " "; echo $_SESSION["nom"]; ?></b></h2>
            <h4 class="font-yellow"><?php echo $_SESSION["statut"];?></h4>
            <ul class="information margin-tb-30">
              <li><b>Né le : <?php echo $_SESSION["naissance"]; ?> </b></li>
              <li><b> Adresse mail : <?php echo $_SESSION["mail"]; ?> </b></li>

  <br><button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite()"">Modifier les infos</button>
<!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond" class="fond">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt" class="conteneurPrompt">
 
  <div class="titrePrompt">
       Modification des infomations
  </div>
 
  <div class="contenuPrompt">
    <!-- debut - elements de la boite de dialogue -->


<form method="post" action="Profil1.php">
    Nom&nbsp;:
    <input type="text" name="nom" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Prenom&nbsp;:
    <input type="text" name="prenom" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de Naissance&nbsp;:
    <input type="Date" name="naissance" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Email&nbsp;:
    <input type="Email" name="mail" value="Votre texte" id="idText" size="20" maxlength="15" /><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt">
      <br />
      <input type="submit" value="Ok" id="idOk" class="ok" name="Ok" />
      <input type="button" value="Annuler" id="idAnnuler" class="annuler" onclick="clicAnnuler()" />
    </div>
 </form>
  </div>
 
</div>
<!-- Fin - Boite de dialogue -->
         
    </div><!-- container -->
              
            </ul>
            
             
  
          </div><!-- intro -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- intro-section -->
  
  <section class="portfolio-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Portfolio</b></h3>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
          <div class="portfolioFilter clearfix margin-b-80">
            
          </div><!-- portfolioFilter -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
    <div class="portfolioContainer">
      
      <div class="p-item web-design">
        <a href="images/portfolio-1-600x400.jpg" data-fluidbox>
          <img src="images/portfolio-1-600x400.jpg" alt=""></a>
      </div><!-- p-item -->
      
      <div class="p-item branding graphic-design">
        <a href="images/portfolio-7-600x800.jpg" data-fluidbox>
          <img src="images/portfolio-7-600x800.jpg" alt=""></a>
      </div><!-- p-item -->
      
      <div class="p-item web-design">
        <a href="images/portfolio-2-600x400.jpg" data-fluidbox>
          <img src="images/portfolio-2-600x400.jpg" alt=""></a>
      </div><!-- p-item -->
      
      <div class="p-item p-item-2 graphic-design">
        <a class="img" href="images/portfolio-8-300x400.jpg" data-fluidbox>
          <img src="images/portfolio-8-300x400.jpg" alt=""></a>
        <a class="img" href="images/portfolio-9-300x400.jpg" data-fluidbox>
          <img src="images/portfolio-9-300x400.jpg" alt=""></a>
      </div><!-- p-item -->
      
      <div class="p-item branding graphic-design">
        <a href="images/portfolio-3-600x400.jpg" data-fluidbox>
          <img src="images/portfolio-3-600x400.jpg" alt=""></a>
      </div><!-- p-item -->
      
      <div class="p-item graphic-design web-design">
        <a href="images/portfolio-4-600x400.jpg" data-fluidbox>
          <img src="images/portfolio-4-600x400.jpg" alt=""></a>
      </div><!-- p-item -->
      
      <div class="p-item  graphic-design branding">
        <a href="images/portfolio-5-600x800.jpg" data-fluidbox>
          <img src="images/portfolio-5-600x800.jpg" alt=""></a>
      </div><!-- p-item -->
        
      <div class="p-item web-design branding">
        <a href="images/portfolio-6-600x800.jpg" data-fluidbox>
          <img src="images/portfolio-6-600x800.jpg" alt=""></a>
      </div><!-- p-item -->

      <div class="p-item p-item-2 graphic-design">
        <a class="img" href="images/portfolio-10-300x400.jpg" data-fluidbox>
          <img src="images/portfolio-10-300x400.jpg" alt=""></a>
        <a class="img" href="images/portfolio-11-300x400.jpg" data-fluidbox>
          <img src="images/portfolio-11-300x400.jpg" alt=""></a>
      </div><!-- p-item -->
    
    </div><!-- portfolioContainer -->
    
  </section><!-- portfolio-section -->
  
  
  <section class="about-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>A propos de moi</b></h3>
            <h6 class="font-lite-black"><b>DESCRIPTION</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
          <p class="margin-b-50"> <?php echo $_SESSION["apropos"]; ?> </p>
          
          <br><button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite2()">Modifier les infos</button>
         
         <!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond2" class="fond2">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt2" class="conteneurPrompt2">
 
  <div class="titrePrompt2">
       Modification de ma description
  </div>
 
  <div class="contenuPrompt2">
    <!-- debut - elements de la boite de dialogue -->
    <form method="post" action="Profil1.php">

    Description&nbsp;:
    <textarea type="text" name="apropos" rows=6 cols=40>Valeur par défaut</textarea><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt2">
      <br />
      <input type="submit" name="Ok2" value="Ok" id="idOk2" class="ok2" />
      <input type="button" value="Annuler" id="idAnnuler2" class="annuler2" onclick="clicAnnuler2()" />
    </div>
  </form>
 
  </div>
 
</div>
<!-- Fin - Boite de dialogue -->


        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about-section -->
  
  <section class="experience-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Experience Professionnelle</b></h3>
            <h6 class="font-lite-black"><b>EMPLOIS PRECEDENTS</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
        
          <div class="experience margin-b-50">
            <h4><b><?php echo $_SESSION["nom_poste1"]; ?></b></h4>
            <h5 class="font-yellow"><b><?php echo $_SESSION["entreprise1"]; ?></b></h5>
            <h6 class="margin-t-10"><?php echo $_SESSION["date_debut1"]; ?> <?php echo $_SESSION["date_fin1"]; ?></h6>
            <p class="font-semi-white margin-tb-30"><?php echo $_SESSION["desc1"]; ?> </p>
            <!--<ul class="list margin-b-30">
              <li>Duis non volutpat arcu, eu mollis tellus.</li>
              <li>Quis consequat nulla effi citur at.</li>
              <li>Sed finibus aliquam neque sit.</li>
            </ul>-->
          </div><!-- experience -->

          <button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite3bis()">Modifier les infos</button><br>

           <!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond3bis" class="fond3bis">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt3bis" class="conteneurPrompt3bis">
 
  <div class="titrePrompt3bis">
       Modification de l'experience professionnelle
  </div>
 
  <div class="contenuPrompt3bis">
    <!-- debut - elements de la boite de dialogue -->

  <form method="post" action="Profil1.php">

    Nom du poste&nbsp;:
    <input type="text" name="nom_poste1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Entreprise&nbsp;:
    <input type="text" name="entreprise1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de début&nbsp;:
    <input type="Date" name="date_debut1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de fin&nbsp;:
    <input type="Date" name="date_fin1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Description&nbsp;:
    <textarea name="desc1" rows=4 cols=40>Valeur par défaut</textarea><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt3bis">
      <br />
      <input type="submit" name="Ok7" value="Ok" id="idOk3bis" class="ok3bis" />
      <input type="button" value="Annuler" id="idAnnuler3bis" class="annuler3bis" onclick="clicAnnuler3bis()" />
    </div>
 </form>
  </div>
 
</div>

          
          <div class="experience margin-b-50">
            <h4><b> <?php echo $_SESSION["nom_poste2"]; ?></b></h4>
            <h5 class="font-yellow"><b><?php echo $_SESSION["entreprise2"]; ?></b></h5>
            <h6 class="margin-t-10"><?php echo $_SESSION["date_debut2"]; echo "-"; echo $_SESSION["date_fin2"]; ?></h6>
            <p class="font-semi-white margin-tb-30"><?php echo $_SESSION["desc2"]; ?></p>
           <!-- <ul class="list margin-b-30">
              <li>Duis non volutpat arcu, eu mollis tellus.</li>
              <li>Quis consequat nulla effi citur at.</li>
              <li>Sed finibus aliquam neque sit.</li>
            </ul>-->
          </div><!-- experience -->
          <br><button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite3()">Modifier les infos</button><br>

          <!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond3" class="fond3">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt3" class="conteneurPrompt3">
 
  <div class="titrePrompt3">
       Modification de l'experience professionnelle
  </div>
 
  <div class="contenuPrompt3">
    <!-- debut - elements de la boite de dialogue -->

                    

<form method="post" action="Profil1.php">

    Nom du poste&nbsp;:
    <input type="text" name="nom_poste2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Entreprise&nbsp;:
    <input type="text" name="entreprise2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de début&nbsp;:
    <input type="Date" name="date_debut2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de fin&nbsp;:
    <input type="Date" name="date_fin2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Description&nbsp;:
    <textarea name="desc2" rows=4 cols=40>Valeur par défaut</textarea><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt3">
      <br />
      <input type="submit" name="Ok3" value="Ok" id="idOk3" class="ok3" />
      <input type="button" value="Annuler" id="idAnnuler3" class="annuler3" onclick="clicAnnuler3()" />
    </div>
 </form>
  </div>
 
</div>

          
      
 
</div>
<!-- Fin - Boite de dialogue -->

        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
  </section><!-- experience-section -->
  
  <section class="education-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Education</b></h3>
            <h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
          <div class="education-wrapper">
            <div class="education margin-b-50">
              <h4><b><?php echo $_SESSION["diplome1"]; ?></b></h4>
              <h5 class="font-yellow"><b><?php echo $_SESSION["universite1"]; ?></b></h5>
              <h6 class="font-lite-black margin-t-10"><?php echo $_SESSION["date_val1"]; ?></h6>
              <p class="margin-tb-30"><?php echo $_SESSION["descri1"]; ?></p>
            </div><!-- education -->

            <button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite42()">Modifier les infos</button><br>

          <!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond42" class="fond42">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt42" class="conteneurPrompt42">
 
  <div class="titrePrompt42">
       Modification du parcours scolaire
  </div>
 
  <div class="contenuPrompt42">
    <!-- debut - elements de la boite de dialogue -->


<form method="post" action="Profil1.php">
    Diplome&nbsp;:
    <input type="text" name="diplome1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Université&nbsp;:
    <input type="text" name="universite1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de validation&nbsp;:
    <input type="Date" name="date_val1" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Description&nbsp;:
    <textarea name="descri1" rows=6 cols=40>Valeur par défaut</textarea><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt42">
      <br />
      <input type="submit" name="Ok6" value="Ok" id="idOk42" class="ok42"/>
      <input type="button" value="Annuler" id="idAnnuler42" class="annuler42" onclick="clicAnnuler42()" />
    </div>
 </form>
  </div>
 
</div>
            
            
            <div class="education margin-b-50">
              <h4><b><?php echo $_SESSION["diplome2"]; ?></b></h4>
              <h5 class="font-yellow"><b><?php echo $_SESSION["universite2"]; ?></b></h5>
              <h6 class="font-lite-black margin-t-10"><?php echo $_SESSION["date_val2"]; ?></h6>
              <p class="margin-tb-30"><?php echo $_SESSION["descri2"]; ?></p>
            </div><!-- education -->
            
            <button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite41()">Modifier les infos</button><br>

          <!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond41" class="fond41">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt41" class="conteneurPrompt41">
 
  <div class="titrePrompt41">
       Modification du parcours scolaire
  </div>
 
  <div class="contenuPrompt41">
    <!-- debut - elements de la boite de dialogue -->


<form method="post" action="Profil1.php">
    Diplome&nbsp;:
    <input type="text" name="diplome2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Université&nbsp;:
    <input type="text" name="universite2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de validation&nbsp;:
    <input type="Date" name="date_val2" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Description&nbsp;:
    <textarea name="descri2" rows=6 cols=40>Valeur par défaut</textarea><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt41">
      <br />
      <input type="submit" name="Ok5" value="Ok" id="idOk41" class="ok41" onclick="clicOk41()" />
      <input type="button" value="Annuler" id="idAnnuler41" class="annuler41" onclick="clicAnnuler41()" />
    </div>
 </form>
  </div>
 
</div>


            <div class="education margin-b-50">
              <h4><b><?php echo $_SESSION["diplome3"]; ?></b></h4>
              <h5 class="font-yellow"><b><?php echo $_SESSION["universite3"]; ?></b></h5>
              <h6 class="font-lite-black margin-t-10"><?php echo $_SESSION["date_val3"]; ?></h6>
              <p class="margin-tb-30"><?php echo $_SESSION["descri3"]; ?></p>
            </div><!-- education -->
          </div><!-- education-wrapper -->

          <br><button type="button" class="btn btn-warning btn-lg" href="#" onclick="ouvreBoite4()">Modifier les infos</button>

          <!-- Debut - Boite de dialogue -->
     <!-- Fond de la boite de dialogue -->
<div id="idFond4" class="fond4">
&nbsp;
</div>
 
      <!-- Boite de dialogue -->
<div id="monPrompt4" class="conteneurPrompt4">
 
  <div class="titrePrompt4">
       Modification du parcours scolaire
  </div>
 
  <div class="contenuPrompt4">
    <!-- debut - elements de la boite de dialogue -->


<form method="post" action="Profil1.php">
    Diplome&nbsp;:
    <input type="text" name="diplome3" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Université&nbsp;:
    <input type="text" name="universite3" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Date de validation&nbsp;:
    <input type="Date" name="date_val3" value="Votre texte" id="idText" size="20" maxlength="15" /><br />
    Description&nbsp;:
    <textarea type="text" name="descri3" rows=6 cols=40>Valeur par défaut</textarea><br />

    <!-- fin - elements de la boite de dialogue -->
 
    <div class="boutonsPrompt4">
      <br />
      <input type="submit" name="Ok4" value="Ok" id="idOk4" class="ok4"/>
      <input type="button" value="Annuler" id="idAnnuler4" class="annuler4" onclick="clicAnnuler4()" />
    </div>
 </form>
  </div>
 
</div>
<!-- Fin - Boite de dialogue -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
  </section><!-- about-section -->

  
  
  <!-- SCRIPTS -->

  <script src="common-js/scripts.js"></script>
  
  <script src="common-js/jquery-3.2.1.min.js"></script>
  
  <script src="common-js/tether.min.js"></script>
  
  <script src="common-js/bootstrap.js"></script>
  
  <script src="common-js/isotope.pkgd.min.js"></script>
  
  <script src="common-js/jquery.waypoints.min.js"></script>
  
  <script src="common-js/progressbar.min.js"></script>
  
  <script src="common-js/jquery.fluidbox.min.js"></script>

   <footer class="container-fluid text-center">
  <p>@PoolCorporation</p>
</footer>
  

  
</body>
</html>
