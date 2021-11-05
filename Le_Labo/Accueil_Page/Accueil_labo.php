<!DOCTYPE HTML>

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
						
					<a onclick=initConnexion()> Connexion </a>
					<!-- <a href="http://localhost/Le_Labo/login.php" target="_blank"> Se connecter </a> -->
						
					</br>
					<!-- <a href="http://localhost/Le_Labo/formulaire_inscription.php" target="_blank"> Inscription </a> -->
						
					<!-- placer ici liens pour se co -->																							
			</div>
				
			
		</div>

		<!-- la div topbar se termine ici -->

		<nav> 
				<ul class="navlib">
					<ul class="bip"> <li> <a class="bip7" onclick=initAccueil()> Accueil </a></li> </ul>					
					<ul class="bip"> <li> <a class="bip7" onclick=initBlog('Visiteur')> Blog </a></li> </ul>
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
							<input type="text" placeholder="Pseudo" name="user" title="les caractères telle que '*' '#' etc... ne sont pas autorisés"/>
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

			<ul id="columnright">  			
						<!--<div class="text"> -->
					<li class="bulle">

						
						<p class="rédaq" >

							&nbsp;&nbsp;
							Après une crise difficile, Samsung lance son nouveau vaisseau-amiral, le Galaxy S8 et son grand frère, 
							le S8+. Cette fois-ci, les bords sont incurvés sur les deux modèles. 
							Et le lecteur de cartes MicroSD est de retour. 						
							
						</p>
						
					</li>

					<li class="bulle">					

						
						<p class="rédaq" >

							&nbsp;&nbsp;
							Asus ne laisse guère de créneau inoccupé sur le marché informatique. Cartes mères, cartes graphiques,
							écrans, claviers, souris, PC portables et mini PC gaming, comme le GR8.
							Après une crise difficile, Samsung lance son nouveau vaisseau-amiral, le Galaxy S8 et son grand frère, 
							le S8+. Cette fois-ci, les bords sont incurvés sur les deux modèles. 
							Et le lecteur de cartes MicroSD est de retour. 						
							
						</p>

					</li>						
						<!--</div>-->
													
					<li class="bulle">

						
						<p class="rédaq" >

							&nbsp;&nbsp;
							Annoncée il y a bientôt 1 an, la nouvelle console de Microsoft continue de faire fantasmer les 
							uns et les autres sans qu’aucune vraie info tangible et officielle n’ait filtré depuis. C’est un tour de force de communication 
							mais à quelques mois de l’E3, c’est trop peu pour les joueurs. 
							
						</p>

					</li>

					<li class="bulle">
						
						<p class="rédaq" >

							&nbsp;&nbsp;
							La plateforme de la Pebble ne dément pas son succès depuis le lancement du premier modèle début 2013, 
							désormais, il y a un App store vous permettant d’installer des « Watch faces » personnalisées et des applications 
							vous permettant de vous enregistrer sur Foursquare ou acheter un café chez Starbucks.
							
						</p>
					</li>
				</ul>
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