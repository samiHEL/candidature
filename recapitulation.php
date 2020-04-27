<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
		
	<p>
		<strong>Recapitulatif du formulaire: </strong>
	</p>
		
		<table>
			<tr>
				<td>
					<strong>Votre civilité:</strong>
				</td>
				<td>
					<?php echo $_GET["civilité"]; ?>
				</td>
			  </tr>
			
			  <tr>
				<td>
					<strong>Votre nom:</strong>
				</td>
				<td>
					<?php echo $_GET["nom"]; ?>
				</td>
			  </tr>
			  
			  <tr>
				<td>
					<strong>Votre prenom:</strong>
				</td>
				<td>
					<?php echo $_GET["prenom"]; ?>
				</td>
			  </tr>
			  
			  <tr>
				<td>
					<strong>Votre date de naissance: </strong>
				</td>
				<td>
					<?php echo $_GET["date"]; ?>
				</td>
			  </tr>
			  
			  <tr>
				<td>
					<strong>Votre numéro de télephone: </strong>
				</td>
				<td>
					<?php echo $_GET["tel"]; ?>
				</td>
			  </tr>
			  
			  <tr>
				<td>
					<strong>Votre email: </strong>
				</td>
				<td>
					<?php echo $_GET["email"]; ?>
				</td>
			  </tr>
			  
			  <tr>
				<td><strong>Votre niveau en PHP: </strong></td><td><?php echo $_GET["niveau"]; ?></td>
			  </tr>
			  
			  <tr>
				<td>
					<strong>Les frameworks déjà pratiqués: </strong>
				</td>
				<td>
					<ul>
						<li><?php echo $_GET["frameworks"]; ?></li>
					</ul>
				</td>
			  </tr>
			  
			  <tr>
				<td>
					<strong>La présentation de votre parcours: </strong>
				</td>
				<td>
					<?php echo $_GET["commentaire"]; ?>
				</td>
			  </tr>
			  
		</table>	
	</body>
</html>
