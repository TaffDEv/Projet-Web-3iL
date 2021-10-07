<!DOCTYPE html>

<html> 

<head> 

	<meta charset ="utf-8">
	<link href="./style_css/formul.css" rel="stylesheet"/>
	<title> Inscription </title>

</head>

<body>
	
	<div id="box" align="center">
		
		<h1 class="ex"> 
		
			Inscription 
		
		</h1>
		
		<hr style="clear:both; visibility: hidden;" />
		
		<form action="traitement.php" method="post">
			
			<table>
			
				<tr>
					<td align="right">				
						<label for="identifiant" > Identifiant : </label>							
					</td>
					
					<td>
						<input type="text" placeholder="Pseudo" name="id" title="les caractères telle que '*' '#' etc... ne sont pas autorisés"/>
					</td>					
				</tr>
				
				<tr>				
					<td align="right">				
						<label for="mail"> Adresse Mail : </label>							
					</td>
					
					<td>
						<input type="e-mail" placeholder="E-mail" name="mail" title="Les Caractères telle que '*' '#' etc... ne sont pas autorisés"/>
					</td>	
				</tr>
				
				<tr>				
					<td align="right">				
						<label for="mail2"> Confirmation du Mail : </label>							
					</td>
					
					<td>
						<input type="e-mail" placeholder="E-mail" name="mail2"/>
					</td>	
				</tr>
				
				<tr>				
					<td align="right">				
						<label for="mdp"> Choissisez un Mot de Passe : </label>							
					</td>
					
					<td>
						<input type="password" placeholder="Mot de Passe" name="mdp"/>
					</td>	
				</tr>
				
				<tr>				
					<td align="right">				
						<label for="mdp2"> Confirmation du Mot de Passe : </label>							
					</td>
					
					<td>
						<input type="password" placeholder="Mot de Passe" name="mdp2"/>
					</td>	
				</tr>		
			
			</table>	
			
				<hr style="clear:both; visibility: hidden;" />
		
				<input type="submit" name="submit" value="Je m'inscrie">
		</form>
			
			<?php 
				if(isset($_GET['error'])) {echo$_GET['error'];}
				// si présence de 'error' dans url, alors on affiche l'error, s'effectue grâce à "$_GET"
			?>
	
	
	</div>

</body>

	
</html>  