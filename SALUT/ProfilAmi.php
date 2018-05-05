<?php
 session_start();
  $bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Introduction au Bootstrap</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link rel="stylesheet"  
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
  .photo{
    padding-top: 5px;
  }

	.navbar{
		margin-bottom:0;
		border-radius:0;
	}

   footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
	</style>
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
      <img class="photo" src="images/logo.png" size="100%" height="45" > 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./Accueil.php">Accueil</a></li>
        <li><a href="./Reseau.php">Mon réseau</a></li>
        <li><a href="./Profil1.php">Mon profil</a></li>
        <li><a href="#">Notifications</a></li>
        <li><a href="#">Messagerie</a></li>
        <li><a href="./Emploi.php">Emploi</a></li>
        <li><a href="./Administrateur.php"> <?php if($_SESSION['role']==1){echo "Administrateur";}?></a></li>
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
            <?php $image = $_SESSION["photo_ami"];?>
            <div class="profile-img"><img src="<?php echo $_GET['immg']; ?>" alt="" width="100%"></div>
            <h2><b><?php echo $_GET['pree']; echo " "; echo $_GET['noom']; ?></b></h2>
            <h4 class="font-yellow">Étudiante en école d'ingénieur</h4>
            <ul class="information margin-tb-30">
              <li><b>BORN : <?php echo $_GET['daate']; ?></b></li>
              <li><b>EMAIL : <?php echo $_GET['maail']; ?> </b></li>          
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
            <h3><b>About me</b></h3>
            <h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
          <p class="margin-b-50">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque 
          sit amet sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla maximus pellentes que velit, quis consequat nulla effi citur at. 
          Maecenas sed massa tristique.Duis non volutpat arcu, eu mollis tellus. 
          Sed finibus aliquam neque sit amet sodales. Lorem ipsum dolor sit amet, 
          consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur 
          adipiscing elit. Nulla maximus pellentes que velit, quis consequat nulla 
          effi citur at.Maecenas sed massa tristique.</p>
          
          
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- about-section -->
  
  <section class="experience-section section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="heading">
            <h3><b>Work Experience</b></h3>
            <h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
          </div>
        </div><!-- col-sm-4 -->
        <div class="col-sm-8">
        
          <div class="experience margin-b-50">
            <h4><b>JUNIOR PROJECT MANAGER</b></h4>
            <h5 class="font-yellow"><b>DESIGN STUDIO</b></h5>
            <h6 class="margin-t-10">MARCH 2015 - PRESENT</h6>
            <p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
              quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
              eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
            <ul class="list margin-b-30">
              <li>Duis non volutpat arcu, eu mollis tellus.</li>
              <li>Quis consequat nulla effi citur at.</li>
              <li>Sed finibus aliquam neque sit.</li>
            </ul>
          </div><!-- experience -->
          
          <div class="experience margin-b-50">
            <h4><b>WEB MASTER/WEB DEVELOPER</b></h4>
            <h5 class="font-yellow"><b>DESIGN & WEB STUDIO</b></h5>
            <h6 class="margin-t-10">APRIL 2014 - FEBRUARY 2015</h6>
            <p class="font-semi-white margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
              quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
              eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
            <ul class="list margin-b-30">
              <li>Duis non volutpat arcu, eu mollis tellus.</li>
              <li>Quis consequat nulla effi citur at.</li>
              <li>Sed finibus aliquam neque sit.</li>
            </ul>
          </div><!-- experience -->
          
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
              <h4><b>MASTER DEGREE IN SCIENCE</b></h4>
              <h5 class="font-yellow"><b>UCLA - SCIENCE AND ENGINEERING</b></h5>
              <h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2010(2 YEARS)</h6>
              <p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
              quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
              eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
            </div><!-- education -->
            
            <div class="education margin-b-50">
              <h4><b>COURSE ON COMPUTER SCIENCE</b></h4>
              <h5 class="font-yellow"><b>NEW YORK PUBLIC UNIVERSITY</b></h5>
              <h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2009(6 MONTHS)</h6>
              <p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
              quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
              eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
            </div><!-- education -->
            
            <div class="education margin-b-50">
              <h4><b>GRADUATED VALEDICTERIAN</b></h4>
              <h5 class="font-yellow"><b>PUBLIC COLLEGE</b></h5>
              <h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2008(4 YEARS)</h6>
              <p class="margin-tb-30">Duis non volutpat arcu, eu mollis tellus. Sed finibus aliquam neque sit amet sodales. 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus pellentes que velit, 
              quis consequat nulla effi citur at. Maecenas sed massa tristique.Duis non volutpat arcu, 
              eu mollis tellus. Sed finibus aliquam neque sit amet sodales. </p>
            </div><!-- education -->
          </div><!-- education-wrapper -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
    
  </section><!-- about-section -->
  
 <footer class="container-fluid text-center">
  <p>@PoolCorporation</p>
</footer>

  
  
  <!-- SCIPTS -->
  
  <script src="common-js/jquery-3.2.1.min.js"></script>
  
  <script src="common-js/tether.min.js"></script>
  
  <script src="common-js/bootstrap.js"></script>
  
  <script src="common-js/isotope.pkgd.min.js"></script>
  
  <script src="common-js/jquery.waypoints.min.js"></script>
  
  <script src="common-js/progressbar.min.js"></script>
  
  <script src="common-js/jquery.fluidbox.min.js"></script>
  
  <script src="common-js/scripts.js"></script>
  
</body>
</html>
