<?php

	class ModeleSBVentes {

		private static $connexion = null ;
		
		private function __construct(){
			self::$connexion = new PDO( 'mysql:host=localhost;dbname=sbventes', 'sanayabio', 'azerty' ) ;
		}

		private static function getConnexion(){
			if( self::$connexion == null ){
				new ModeleSBVentes() ;
			}
			return self::$connexion ;
		}

		public static function getClient( $email , $mdp ){
			$bd = self::getConnexion() ;
			
			$sql = "select id , nom , prenom " 
				 . "from client "
				 . "where email = '$email' "
				 . "and mdp = '$mdp' " ;
				 
			$st = $bd->query( $sql ) ;

			$client = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
		}
		
		public static function getFacturesClient( $idClient ){
			$bd = self::getConnexion() ;
			$sql = "select id , dateEmission "
				 . "from facture "
				 . "where idClient = :idClient " ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':idClient' => $idClient ) ) ;
			$factures = $st->fetchall( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $factures ;
		}
		
		public static function getFactureClient( $idFacture ){
			$bd = self::getConnexion() ;
			$sql = "select id , dateEmission , dateReglement , modeReglement from facture where id = :idFacture" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':idFacture' => $idFacture ) ) ;
			$facture = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $facture ;
		}
		
	};
	

?>
