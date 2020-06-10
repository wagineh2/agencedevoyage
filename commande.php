<?PHP
class commande{
	private $id;
	private $email ;
	private $id_client;
	private $id_produit;
	private $dateCommande;
	private $prix_total;
	private $nb;
	private $etat ;
	//private $code ;
	function __construct($id_client,$dateCommande,$prix_total,$id_produit)
	{
		$this->id_client=$id_client;
		$this->dateCommande=$dateCommande;
		$this->prix_total=$prix_total;
		$this->id_produit=$id_produit;
	}
	
	
	function getid_client(){
		return $this->id_client;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getdateCommande(){
		return $this->dateCommande;
	}
	function getprix_total(){
		return $this->prix_total;
	}
	function getnb(){
		return $this->nb;
	}
	function getetat(){
		return $this->etat;
	}
	

	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setdateCommande($dateCommande){
		$this->dateCommande=$dateCommande;
	}
	function setprix_total($prix){
		$this->prix_total=$prix_total;
	}
	function setnb($nb){
		$this->nb=$nb;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	
}

?>