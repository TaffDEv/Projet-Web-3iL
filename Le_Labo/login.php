<!DOCTYPE html>

<html> 

<head> 

	<meta charset ="utf-8">
	<link href=".../style_css/formul.css" rel="stylesheet"/>
	<title> Inscription </title>

</head>

<body>
			
	<form action="traitement.php" method="post">
			
		<table>
			
			<tr>
				<td align="right">				
					<label for="identifiant" > Email : </label>							
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
					

</body>

	
</html>