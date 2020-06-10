<?PHP
include "config.php";

class reservationC
{
	function ajouterress($ress)
	{
		include "../config.php";
		 $sql = "INSERT INTO res (photo,nb,destination) values (:photo, :nb, :destination) ";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':photo', $ress->getphoto());
            $req->bindValue(':nb', $ress->getnb());
			$req->bindValue(':destination', $ress->getdestination());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
		function rechercheress($key)
	{
			
		$sql = "SELECT * FROM res WHERE photo LIKE '%$key%' OR nb LIKE '%$key%' OR destination LIKE '%$key%' or id LIKE '%$key'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function afficherress()
	{
		$sql = "SELECT * FROM res";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerress($ref)
	{
		include "../config.php";
		$sql = "DELETE FROM res where id= :id";
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
