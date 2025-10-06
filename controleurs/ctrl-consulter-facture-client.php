<?php
	
	require "modeles/ModeleSBVentes.php" ;
	$facture = ModeleSBVentes::getFactureClient( $numFacture ) ;
	//var_dump( $facture ) ;
	require "vues/vue-facture-client.php" ;
?>
