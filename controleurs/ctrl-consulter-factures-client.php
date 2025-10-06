<?php
	
	require "modeles/ModeleSBVentes.php" ;
	$factures = ModeleSBVentes::getFacturesClient( $_SESSION[ 'id' ] ) ;
	//var_dump( $factures ) ;
	require "vues/vue-factures-client.php" ;
?>
