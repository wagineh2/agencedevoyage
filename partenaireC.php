<?PHP
include "config.php";
//include "../entities/avis.php";


class PartenaireC {
function afficherPartenaire ($partenaire){
        echo "id: ".$partenaire->getid()."<br>";
        echo "nom: ".$partenaire->getnom()."<br>";
        echo "adresse: ".$partenaire->getadresse()."<br>";
        echo "numero: ".$partenaire->getnumero()."<br>";

    }

    function ajouterPartenaire($partenaire)
    {
        $sql="insert into partenaire
        (id,nom,adresse,numero) 
        values (:id,:nom,:adresse,:numero)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $id=$partenaire->getid();
        $nom=$partenaire->getnom();
        

        $adresse=$partenaire->getadresse();
        $numero=$partenaire->getnumero();
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':numero',$numero);


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
	
	function afficherPartenairee(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From partenaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPartenaire($id){
		$sql="DELETE FROM partenaire where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPartenaire($partenaire,$id){
		$sql="UPDATE partenaire SET id=:idd, nom=:nom,adresse=:adresse, numero=:numero WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$partenaire->getId();
        $nom=$partenaire->getNom();
        $adresse=$partenaire->getAdresse();
        $numero=$partenaire->getNumero();
        $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom ,':adresse'=>$adresse,':numero'=>$numero);
        $req->bindValue(':idd',$idd);
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom );
		$req->bindValue(':adresse',$adresse);
        $req->bindValue(':numero',$numero);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPartenaire($id){
		$sql="SELECT * from partenaire where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePartenairee($id){
		$sql="SELECT * from partenaire where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>