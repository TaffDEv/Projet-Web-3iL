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
			<ul id="tableArticle">
			</ul>
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