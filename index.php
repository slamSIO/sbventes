<?php

	$route = parse_url( $_SERVER[ 'REQUEST_URI' ] , PHP_URL_PATH ) ;
	echo "#$route#" ;
	
	if( $route == '/' ){
	}
	elseif( $route == '/clients/connexion' ){
	}
	elseif( $route == '/clients/connecter' ){
	}
	elseif( $route == '/clients/deconnecter' ){
	}
	elseif( $route == '/clients/factures' ){
	}
	elseif( preg_match( '#^/clients/factures/([0-9]+)$#' , $route , $atomes ) ){
	}
	else {
		var_dump( $route ) ;
	}
	
?>
