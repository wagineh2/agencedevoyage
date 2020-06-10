<?PHP
include "config.php";
class sponsorC
{
 
	function ajoutersponsor($sponsor)
	{
		 $sql = "INSERT INTO sponsor (nom_sponsor,tel,logo) values (:nom_sponsor, :tel, :logo) ";
        $db = config::getConnexion(); 
        try {
            $req = $db->prepare($sql);
			$req->bindValue(':nom_sponsor', $sponsor->getnom_sponsor());
            $req->bindValue(':tel', $sponsor->gettel());
			$req->bindValue(':logo', $sponsor->getlogo());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
	function recherchesponsor($key)
	{
		$sql = "SELECT * FROM sponsor WHERE nom_sponsor LIKE '%$key%' OR tel LIKE '%$key%'";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function affichersponsor()
	{
		$sql = " SELECT * FROM sponsor ";
        $db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimersponsor($nom_sponsor)
	{
		$sql = "DELETE FROM sponsor where nom_sponsor= :nom_sponsor";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':refC', $refC);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	
}
