<div class = "bulle">
	<ul id='bulleTab'>

	</ul>

	<table>
		
		<tr>

			<td align="right">				
				<label> Nom Utilisateur : </label>							
			</td>
			
			<td>
				<input id='user' type='text' name='user' placeholder='Pseudo' title='les caractères spéciaux ne sont pas autorisés'>
			</td>

		</tr>

		<tr>

			<td align="right">
				<label> Message : </label>							
			</td>
			
			<td>
				<textarea  id='contenu' type='text' name='contenu' placeholder='message' class='case_message'> </textarea>
			</td>

		</tr>

		<tr>
			<td align="right">				
			</td>
		
			<td>
				<input type='submit' name='Envoyer' onclick=envoyerBlogMsg() style="padding: 10px;">
			</td>	
		</tr>		
	</table>
</div>

