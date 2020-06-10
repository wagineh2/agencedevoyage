<?PHP
class CommandeC {
	function ajoutercommandes($commande){
		require "config.php";
		$sql="insert into commande (id_client,dateCommande,prix_total,id_produit) values (:id_client,:dateCommande,:prix_total,:id_produit)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$commande->getid_client();
			  $id_produit=$commande->getid_produit();
        $dateCommande=$commande->getdateCommande();
        $prix_total=$commande->getprix_total();
		$id_produit=$commande->getid_produit();
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':dateCommande',$dateCommande);
		$req->bindValue(':prix_total',$prix_total);
            $req->execute();
					echo '<meta http-equiv="refresh" content="0;URL=index.php">'; 
           
        }
        catch (Exception $e){
            echo 'Erreur (ajout): '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		require "config.php";
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commande order by id ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affichercommandesdes(){
		require "config.php";
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From commande order by prix_total DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimercommandes($id){

        $sql=" DELETE FROM commande where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
            header('Location: ligne_de_commande.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}





	function modifieretat($id,$etat)
   {  
		$sql = "UPDATE commande SET etat='$etat' WHERE id=:id ";
	
	$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
                       header('Location: ligne_de_commande.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
 }
	 
 


	function modifiercommandes($commande,$id){
		$sql="UPDATE commande SET id=:ide,id_client=:id_client,dateCommande=:dateCommande,prix_total=:prix_total,quantity=:quantity,etat=:etat WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$ide=$commande->getid();
        $id_client=$commande->getid_client();
        $dateCommande=$commande->getdateCommande();
        $prix_total=$commande->getprix_total();
        $quantity=$commande->getquantity();
        $etat=$commande->getetat() ;
		$datas = array(':ide'=>$ide,':id'=>$id,':id_client'=>$id_client,':dateCommande'=>$dateCommande,':prix_total'=>$prix_total,':quantity'=>$quantity,':etat'=>$etat);
		$req->bindValue(':ide',$ide);
		$req->bindValue(':id',$id);
		$req->bindValue(':dateCommande',$dateCommande);
		$req->bindValue(':id_client',$id_client);

		$req->bindValue(':prix_total',$prix_total);
		$req->bindValue(':quantity',$quantity);
	$req->bindValue(':etat',$etat);
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommandes(){
		$sql="SELECT * FROM commande ORDER BY id DESC LIMIT 1;";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);

		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recherchercommandes($str){
		$sql="select * from commande where  id like '%".$str."%' or id_client like '%".$str."%' or dateCommande like '%".$str."%' or prix_total like '%".$str."%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function discount($code)
	{
		$sql="SELECT * FROM commande WHERE `code` = '$coupon_code'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	  function chercher($id_client)
	{
		$sql="select * from client where id_client = '$id_client' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}*/
}
?>