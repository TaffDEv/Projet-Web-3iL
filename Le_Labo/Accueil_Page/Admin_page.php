<?php
	session_start();
?>

<!DOCTYPEHTML>

<html lang="fr">

<head>
	
	<meta charset="utf-8" /> <!--Commentaire-->
	<link href="../style_css/any_lab.css" rel="stylesheet"/>
	<link href="../style_css/galerie.css" rel="stylesheet"/> 
	<link rel="shortcut icon" href="labs.png">
	<script src="jvc.js" type="text/javascript"></script>


	

	<title>Labo Tech</title>

</head>


<body>

	<hr style="clear:both; visibility: hidden;" />	

	<div id="container"> 
			
		<div id="topbar">
				
				<div id="lbt">
						
					 <img src="./lbt.png" width="250" height="150"/> 
					 		  		 
					 <!--Placer ici bannière LBT, celle-ci servira aussi de lien d'acceuil -->
					 <h1> La Référence Numérique </h1> 		 
						 
				 </div>
							
			
			<div id="zone_co">

				 <?php 
				 	

						if(array_key_exists("submit", $_POST)){
							/*session_start();*/							
							unset($_SESSION);
							session_destroy();
							session_write_close();
							header('Location:Accueil_labo.php');							
						}	
				 ?>							
				
				<form method='POST'>

					<input type="submit" name="submit" value="Déconnexion" class="Button">


				</form>
				
			</div>
				
			
		</div>

		<!-- la div topbar se termine ici -->

		<nav> 
				<ul>
					<ul class="bip"> <li> <a class="bip7" onclick=initAccueil()> Accueil </a></li> </ul>
					<ul class="bip"> <li> <a class="bip7" onclick=initArticles()> Articles </a></li> </ul>
					<ul class="bip"> <li> <a class="bip7" onclick=initBlog()> Blog </a></li> </ul>
					<ul class="bip"> <li> <a class="bip7" onclick=initGalery()> Photos </a></li> </ul>
				</ul>	
		</nav>
			
		<!-- fin div navbar -->

		<div id="main">
	
		</div>
		<!-- fin div main -->


		<!-- début div footer -->
		<div id="footer"> 
			
			<div class="pro">
					
				<span class="lb">	

					<a href="Accueil_labo.php" target="blank" title="LBT Accueil"> 
						<img class="part" src="./lbt.png" width="250" height="150"/>
					</a> 
							
				</span> 
				
				<p>
					A propos du LaboTech. <br>
					Le LaboTech est un site web qui traite de l'actualité High-Tech. <br>
					Notre veille s'articule dans les secteurs : Jeux Vidéo, Web, Mobile et High-Tech. <br>
					Vous pouvez vous tenir au courant des dernières nouveautés publiées 
					sur notre site web mais aussi sur nos réseaux sociaux.<br><br>
					Copyright 2021 © 3IL | Tous droits réservés				
				</p>
			</div>
				
		</div>

			<!-- fin div footer -->

	</div>
		<!-- fin div container -->

	
	<div id='hidden'>

		<div id = 'connexion'> 

			<form action="traitement_log.php" method="post" class="bulle">
			
				<table>
					
					<tr>
						<td align="right">				
							<label for="identifiant" > Nom Admin : </label>							
						</td>
						
						<td>
							<input type="text" placeholder="Pseudo" name="id" title="les caractères telle que '*' '#' etc... ne sont pas autorisés"/>
						</td>					
					</tr>								
		
					<tr>				
						<td align="right">				
							<label for="mdp"> Mot de Passe : </label>							
						</td>
		
						<td>
							<input type="password" placeholder="Mot de Passe" name="mdp"/>
						</td>	
					</tr>				
		
					<tr>
						<td align="right">				
						</td>
					
						<td>
							<input type="submit" name="submit" value="Se Connecter">
						</td>	
					</tr>	
				</table>	
			</form>	

			<?php 
				if(isset($_GET['error'])) {echo$_GET['error'];}
				// si présence de 'error' dans url, alors on affiche l'error, s'effectue grâce à "$_GET"
			?>

		</div>
		
			<!-- fin div connexion -->

		<div id = 'accueil'>

		<h1> 
				<?php

					if (isset($_SESSION['user_name'])) {
  							echo "Bonjour ".$_SESSION['user_name']." Souhaitez-vous modifier la page ?";
  					}else{

  						echo "Veuillez vous connecter";
  					}										
  					
				?>

				

			 </h1> 

		</div>

		<div id = 'articles'>
				
			<div id="columnright">  			
					<!--<div class="text"> -->
				<li class="bulle">

					<!--  <img class="imgarticles" src="../Accueil_Page/smartpic/Le-Galaxy-S8.png" alt="NEWS S8"> -->
					<img class="imgarticles" src="../Accueil_Page/smartpic/Le-Galaxy-S8.png" alt="NEWS S8">

					<p class="rédaq" >

						&nbsp;&nbsp;
						Après une crise difficile, Samsung lance son nouveau vaisseau-amiral, le Galaxy S8 et son grand frère, 
						le S8+. Cette fois-ci, les bords sont incurvés sur les deux modèles. 
						Et le lecteur de cartes MicroSD est de retour. 						
						<a href="../pagesco/galaxyS8.html" target="blank" title="NEWS S8"> Lire la suite.. </a>
						
					</p>
					
				</li>

				<li class="bulle">					

						<!-- <hr style="clear:both; visibility: hidden;" /> -->	
						<img class="imgarticles" src="../Accueil_Page/smartpic/Le-Galaxy-S8.png" alt="NEWS S8">

					<p class="rédaq" >

						&nbsp;&nbsp;
						Asus ne laisse guère de créneau inoccupé sur le marché informatique. Cartes mères, cartes graphiques,
						écrans, claviers, souris, PC portables et mini PC gaming, comme le GR8.
						Après une crise difficile, Samsung lance son nouveau vaisseau-amiral, le Galaxy S8 et son grand frère, 
						le S8+. Cette fois-ci, les bords sont incurvés sur les deux modèles. 
						Et le lecteur de cartes MicroSD est de retour. 						
						<a href="../Accueil_Page/pagesco/galaxyS8.html" target="blank" title="NEWS S8"> Lire la suite.. </a>

					</p>

				</li>						
					<!--</div>-->
				
				<div id="diaporama">
					
					<figure>
						
						<a href="../pagesco/galaxyS8.html" target="blank" title="NEWS S8"> <img src="../Accueil_Page/smartpic/Le-Galaxy-S8.png" alt="NEWS S8"> </a>
						<a href="../pagesco/Asus Rog GR8.html" target="blank" title="ROG GR8"> <img src="../Accueil_Page/smartpic/ASUS_Rogue.png" alt="ROG GR8"> </a>
						<img src="../Accueil_Page/smartpic/X-Box Scorpio.png">
						<img src="../Accueil_Page/smartpic/Pebble Steel.png">
					
					</figure>
				
				</div>
				
				<li class="bulle">

					<img class="imgarticles" src="../Accueil_Page/smartpic/Le-Galaxy-S8.png" alt="NEWS S8">

					<p class="rédaq" >

						&nbsp;&nbsp;
						Annoncée il y a bientôt 1 an, la nouvelle console de Microsoft continue de faire fantasmer les 
						uns et les autres sans qu’aucune vraie info tangible et officielle n’ait filtré depuis. C’est un tour de force de communication 
						mais à quelques mois de l’E3, c’est trop peu pour les joueurs. 
						<a href="../Accueil_Page/pagesco/galaxyS8.html" target="blank" title="NEWS S8"> Lire la suite.. </a>

					</p>

				</li>

				<li class="bulle">

					<img class="imgarticles" src="../Accueil_Page/smartpic/Le-Galaxy-S8.png" alt="NEWS S8">

					<p class="rédaq" >

						&nbsp;&nbsp;
						La plateforme de la Pebble ne dément pas son succès depuis le lancement du premier modèle début 2013, 
						désormais, il y a un App store vous permettant d’installer des « Watch faces » personnalisées et des applications 
						vous permettant de vous enregistrer sur Foursquare ou acheter un café chez Starbucks.
						<a href="../Accueil_Page/pagesco/galaxyS8.html" target="blank" title="NEWS S8"> Lire la suite.. </a>

					</p>


				</li>					
					
				
			</div>
				<!-- fin div columnright -->		
		</div>

		<div id = 'blog'>
			
			<?php include('blog.php') ?>			

		</div>
			<!-- fin div Blog-->

		<div id = 'playerJS'> <!-- nav -->

			<ul id='galerie_mini'>

			</ul>

				  <dl id='photo'>
				    <dd><img id='picture'/></dd>
				  
				    <button id='backwardButton' type="button" onclick=changePhoto('backward')>
				    	<
					</button>
					<span id ='text-img'>Default</span>
					<button id='forwardButton' type="button" onclick=changePhoto('forward')>
					    >
					</button>

				  </dl>


					
		</div>	
	</div>

</body>

</html>