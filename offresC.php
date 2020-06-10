<?PHP
include "config.php";

class offresC
{
	function ajouteroffres($offres)
	{
		include "../config.php";
		require_once('../entites/produit.php');
		 $sql = "INSERT INTO offre (nom_offre,nom_sponsor,destination) values (:nom_offre, :nom_sponsor, :destination) ";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom_offre', $offres->getnom_offre());
            $req->bindValue(':nom_sponsor', $offres->getnom_sponsor());
			$req->bindValue(':destination', $offres->getdestination());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
		function rechercheoffres($key)
	{
			
		$sql = "SELECT * FROM offre WHERE nom_offre LIKE '%$key%' OR nom_sponsor LIKE '%$key%' OR destination LIKE '%$key%' or id LIKE '%$key'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficheroffres()
	{
		$sql = "SELECT * FROM offre";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimeroffres($ref)
	{
		include "../config.php";
		$sql = "DELETE FROM offre where id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
}
