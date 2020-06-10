<?php
class UserC
{
	function AjouterUser($User)
	{
		require_once "config.php" ;
		$sql = "insert into client (nom,prenom,email,mdp) values(:nom,:prenom,:email,:pwd)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':nom',$User->getnom()) ;
			$req->BindValue(':prenom',$User->getprenom()) ;
			$req->BindValue(':email',$User->getemail()) ;
			$req->BindValue(':mdp',$User->getmdp()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	function AfficherSign($User)
	{
		echo "nom: ".$User->getnom()."<br>";
		echo "prenom: ".$User->getprenom()."<br>";
		echo "email: ".$User->getemail()."<br>";
		echo "mdp: ".$User->getmdp()."<br>";
	}
	function afficher_Sign_return()
	{
		require_once "config.php" ;
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($User)
	{ 
		require_once "config.php" ;
		$sql="DELETE FROM client where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
}

class AvisC
{
	function AjouterAvis($Avis)
	{
		require_once "config.php" ;
		$sql = "insert into avis (id_client,email,note,comment) values(:id_client,:email,:note,:comment)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':id_client',$Avis->getid_client()) ;
			$req->BindValue(':email',$Avis->getemail()) ;
			$req->BindValue(':note',$Avis->getnote()) ;
			$req->BindValue(':comment',$Avis->getcomment()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	function afficher_Sign_return()
	{
		require_once "config.php" ;
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($id)
	{ 
		require_once "config.php" ;
		$sql="DELETE FROM avis where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercheravis($str){
		require_once "config.php" ;
		$sql="select * from avis where id like '%".$str."%' ";
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
class ReclamationC
{
	function AjouterRec($Reclamation)
	{
		require_once "config.php" ;
		$sql = "insert into avis (id_client,idCommande,email,subject,message,date,type) values(:id_client,:idCommande,:email,:subject,:message,:date,:type)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':id_client',$Reclamation->getid_client()) ;
			$req->BindValue(':idCommande',$Reclamation->getidCommande()) ;
			$req->BindValue(':email',$Reclamation->getemail()) ;
			$req->BindValue(':subject',$Reclamation->getsubject()) ;
			$req->BindValue(':message',$Reclamation->getmessage()) ;
			$req->BindValue(':date',$Reclamation->getdate()) ;
			$req->BindValue(':type',$Reclamation->gettypee()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	function AfficherSign($Reclamation)
	{
		echo "id_client: ".$Reclamation->getid_client()."<br>";
		echo "idCommande: ".$Reclamation->getidCommande()."<br>";
		echo "email: ".$Reclamation->getemail()."<br>";
		echo "subject: ".$Reclamation->getsubject()."<br>";
		echo "message: ".$Reclamation->getmessage()."<br>";
	}
	function afficher_Sign_return()
	{
		require_once "config.php" ;
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
		
	}
	function supprimer($id)
	{ 
		require_once "config.php" ;
		$sql="DELETE FROM avis where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e)
		{
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>