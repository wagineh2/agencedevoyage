<?PHP
include "config.php";

class avissC
{
	function ajouteraviss($aviss)
	{
		include "../config.php";
		require_once('../entites/produit.php');
		 $sql = "INSERT INTO avis (nom_avis,nom_sponsor,destination) values (:nom_avis, :nom_sponsor, :destination) ";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom_avis', $aviss->getnom_avis());
            $req->bindValue(':nom_sponsor', $aviss->getnom_sponsor());
			$req->bindValue(':destination', $aviss->getdestination());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
		function rechercheaviss($key)
	{
			
		$sql = "SELECT * FROM avis WHERE nom_avis LIKE '%$key%' OR nom_sponsor LIKE '%$key%' OR destination LIKE '%$key%' or id LIKE '%$key'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficheraviss()
	{
		$sql = "SELECT * FROM avis";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimeraviss($ref)
	{
		include "../config.php";
		$sql = "DELETE FROM avis where id= :id";
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
