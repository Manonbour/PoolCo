<?php

if(isset($_POST["submit1"])){

$nom = isset($_POST['nom'])? $_POST['nom']:"";
$prenom = isset($_POST['prenom'])? $_POST['prenom']:"";
$email = isset($_POST['email'])? $_POST['email']:"";
$mdp = isset($_POST['mdp'])? $_POST['mdp']:"";
$naissance = isset($_POST['naissance'])? $_POST['naissance']:"";
$sexe = isset($_POST['sexe'])? $_POST['sexe']:"";


$bdd = new PDO('mysql:host=localhost;dbname=poolco;charset=utf8', 'root', '');
$rqt = "INSERT INTO utilisateurs(nom,prenom,mail,naissance,mdp,sexe) VALUES ('$nom','$prenom','$email','$naissance','$mdp','$sexe')";

 $bdd->query($rqt);
	/*$req = $bdd->prepare('INSERT INTO utilisateurs (id,nom,prenom,email,naissance,mdp,sexe,role) VALUES(?, ?,?,?,?,?,?,?)');
$req->execute(array(NULL,$nom, $prenom,$email,NULL,$mdp,NULL,NULL));*/
}

?>

<!DOCTYPE>
<html>
    <head>
        <title>Pool Connexion</title>
        <meta charset="utf-8">
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form class="register" method="post" action="register.php">
						<h3>S'inscrire</h3>
						<div class="column">
							<div>
								<label>Nom</label>
								<input type="text" name="nom"/>
								<span class="error">Erreur</span>
							</div>
							<div>
								<label>Prénom</label>
								<input type="text" name="prenom"/>
								<span class="error">Erreur</span>
							</div>
							<div>
								<label>Adresse mail</label>
								<input type="text" name="email"/>
								<span class="error">Erreur</span>
							</div>
						</div>
						<div class="column">
							<div>
								<label>Date de naissance</label>
								<input type="date" name="naissance"/>
								<span class="error">Erreur</span>
							</div>
							<div>
								<label>Mot de passe</label>
								<input type="password" name="mdp"/>
								<span class="error">Erreur</span>
							</div>
							<div>
								<label>Sexe</label><br>
								<input type="radio" name="sexe" value="homme" id="homme">   Homme
								&nbsp;
								&nbsp;      
								<input type="radio" name="sexe" value="femme" id="femme">   Femme<br>
								<span class="error">Erreur</span>
							</div>
						</div>
						<div class="bottom">
							
							<a href="index.html" rel="login" class="linkform">Vous avez déjà un compte ? Connectez-vous ici</a>
							<div class="clear"></div>
						</div>
						<input type="submit" value="S'inscrire" name="submit1"/>
					</form>

					<form class="login active" method="post" action="register.php">
						<h3>Connection</h3>
						<div>
							<label>Adresse mail</label>
							<input type="text" name="emailCo"/>
							<span class="error">Erreur</span>
						</div>
						<div>
							<label>Mot de passe</label>
							<input type="password" name="mdpCo"/>
							<span class="error">Erreur</span>
						</div>
						<div class="bottom">
							<input id="connect" type="submit" value="Se connecter" name="submit"></input>
							<a href="shipping.html">Se connecter</a>
							<a href="register.html" rel="register" class="linkform">Vous n'avez pas encore de compte ? Inscrivez-vous ici</a>
							<div class="clear"></div>
						</div>
					</form>
					
				</div>
				<div class="clear"></div>
			</div>
		</div>
		

		<!-- The JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function() {
					//the form wrapper (includes all forms)
				var $form_wrapper	= $('#form_wrapper'),
					//the current form is the one with class active
					$currentForm	= $form_wrapper.children('form.active'),
					//the change form links
					$linkform		= $form_wrapper.find('.linkform');
						
				//get width and height of each form and store them for later						
				$form_wrapper.children('form').each(function(i){
					var $theForm	= $(this);
					//solve the inline display none problem when using fadeIn fadeOut
					if(!$theForm.hasClass('active'))
						$theForm.hide();
					$theForm.data({
						width	: $theForm.width(),
						height	: $theForm.height()
					});
				});
				
				//set width and height of wrapper (same of current form)
				setWrapperWidth();
				
				/*
				clicking a link (change form event) in the form
				makes the current form hide.
				The wrapper animates its width and height to the 
				width and height of the new current form.
				After the animation, the new form is shown
				*/
				$linkform.bind('click',function(e){
					var $link	= $(this);
					var target	= $link.attr('rel');
					$currentForm.fadeOut(400,function(){
						//remove class active from current form
						$currentForm.removeClass('active');
						//new current form
						$currentForm= $form_wrapper.children('form.'+target);
						//animate the wrapper
						$form_wrapper.stop()
									 .animate({
										width	: $currentForm.data('width') + 'px',
										height	: $currentForm.data('height') + 'px'
									 },500,function(){
										//new form gets class active
										$currentForm.addClass('active');
										//show the new form
										$currentForm.fadeIn(400);
									 });
					});
					e.preventDefault();
				});
				
				function setWrapperWidth(){
					$form_wrapper.css({
						width	: $currentForm.data('width') + 'px',
						height	: $currentForm.data('height') + 'px'
					});
				}

				$form_wrapper.find('input[id="connect"]').click(function(e)
				{
						alert("dd");
				});

				$form_wrapper.find('input[id="inscription"]').click(function(e)
				{
						alert("gjh");
				});	
			});
        </script>
    </body>
</html>