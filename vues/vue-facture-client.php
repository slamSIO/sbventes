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
		
		<h4>Ma facture n° <?=  $facture[ 'id' ] ?></h4>
		
		<table>
			
			<thead>
				<th>Date émission</th>
				<th>Date réglement</th>
				<th>Mode règlement</th>
			</thead>
			
			<tbody>
				<tr>
					<td><?= $facture[ 'dateEmission' ] ?></td>
					<td>
						<?php if( $facture[ 'dateReglement' ] ){ ?>
							<?= $facture[ 'dateReglement' ] ?>
						<?php } ?>
					</td>
					<td>
						<?php if( $facture[ 'modeReglement' ] ){ ?>
							<?= $facture[ 'modeReglement' ] ?>
						<?php } ?>
					</td>
				</tr>
				
			</tbody>
			
		</table>

	</body>
	
</html>
