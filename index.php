<?php

	$route = parse_url( $_SERVER[ 'REQUEST_URI' ] , PHP_URL_PATH ) ;
	//echo "#$route#" ;
	
	if( $route == '/' ){
		require "vues/vue-connexion-client.php" ;
	}
	elseif( $route == '/clients/connecter' ){
		require "controleurs/ctrl-connecter-client.php" ;
	}
	elseif( $route == '/clients/deconnecter' ){
		session_start() ;
		require "controleurs/ctrl-deconnecter-client.php" ;
	}
	elseif( $route == '/clients/espace' ){ 
		session_start() ;
		require "vues/vue-espace-client.php" ;
	}
	elseif( $route == '/clients/factures' ){
		session_start() ;
		require "controleurs/ctrl-consulter-factures-client.php" ;
	}
	elseif( preg_match( '#^/clients/factures/([0-9]+)$#' , $route , $atomes ) ){
		session_start() ;
		$numFacture = $atomes[ 1 ] ;
		require "controleurs/ctrl-consulter-facture-client.php" ;
	}
	else {
		var_dump( $route ) ;
	}
	
?>
