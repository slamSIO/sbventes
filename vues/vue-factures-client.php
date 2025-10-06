<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Ventes</title>
	</head>
	
	<body>
		<a href="/clients/espace">Mon espace</a>
		<a href="/clients/factures">Mes factures</a>
		<a href="/clients/deconnecter">Me déconnecter</a>
		
		<h4>Mes factures</h4>
		
		<table>
			
			<thead>
				<th>Numéro</th>
				<th>Date Émission</th>
			</thead>
			
			<tbody>
				
				<?php foreach( $factures as $uneFacture ){ ?>
					
					<tr>
						<td><?= $uneFacture[ 'id' ] ?></td>
						<td><?= $uneFacture[ 'dateEmission' ] ?></td>
						
						<td>
							<a href="/clients/factures/<?= $uneFacture[ 'id' ] ?>">Voir</a>
						</td>
						
					</tr>
					
				<?php } ?>
				
			</tbody>
			
		</table>

	</body>
	
</html>
