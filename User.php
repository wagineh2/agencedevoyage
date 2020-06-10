<?php 
include('dbconfig.php') ;
class User
{
	 private $id;
    private $mdp;
	private $role;
    public $conn;	
	private $nom ;
	private $prenom ;
	private $email ;
	private $adresse ;
	private $tel ;
	public function __construct($nom,$mdp,$conn)
	{
		$this->nom=$nom;
		$this->mdp=$mdp;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	function getnom()
	{
		return $this->nom ;
	}
	function gettel()
	{
		return $this->tel ;
	}
	function getprenom()
	{
		return $this->prenom ;
	}
	function getemail()
	{
		return $this->email ;
	}
	function getadresse()
	{
		return $this->adresse;
	}
    function getmdp()
	{
		return $this->mdp;
		
	}
	 function getdate()
	{
		return $this->date;
		
	}
		public function setnom($nom)
	{
		$this->nom=$nom ;
	}
		public function setadresse($adresse)
	{
		$this->nom=$adresse ;
	}
		public function settel($tel)
	{
		$this->tel=$tel ;
	}
		public function setprenom($prenom)
	{
		$this->prenom=$prenom ;
	}
		public function setemail($email)
	{
		$this->email=$email ;
	}
	public function setmdp($mdp)
	{
		$this->mdp=$mdp ;
	}
		public function setdate($date)
	{
		$this->date=$date ;
	}
	public function Logedin($conn,$nom,$mdp)
	{
		$req="select * from client where nom='$nom' && mdp='$mdp'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
	}

	class Userr
	{
	private $nom;
    private $mdp;	
	public $conn;
		public function setnom($nom)
	{
		$this->nom=$nom ;
	}
	public function setmdp($mdp)
	{
		$this->mdp=$mdp ;
	}
	public function __construct($nom,$mdp,$conn)
	{
		$this->nom=$nom;
		$this->mdp=$mdp;
		$c=new Database();
		$this->conn=$c->connexion();
	}
	public function Logedin($conn,$nom,$mdp)
	{
		$req="select * from client where mdp='$nom' && mdp='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	}
class UserEmail
{
	private $email ;
	public $conn ;
	public function setemail($email)
	{
		$this->email=$email ;
	}
	public function __construct($email)
	{
		$this->email=$email ;
		$c=new Database();
		$this->conn=$c->connexion();
	}
		public function LogedinF($conn,$email)
	{
		$req="select * from client where email='$email'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
}
class UserNum
{
	private $numero ;
	public $conn ;
	public function setnumero($numero)
	{
		$this->numero=$numero ;
	}
	public function __construct($numero)
	{
		$this->numero=$numero ;
		$c=new Database();
		$this->conn=$c->connexion();
	}
		public function LogedinF($conn,$numero)
	{
		$req="select * from users where numero='$numero'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
}
class Avis
{
	private $id_client ;
	private $email ;
	private $note ;
	private $comment ;
	
	function getid_client()
	{
		return $this->id_client;
	}
	
	function getemail()
	{
		return $this->email;
	}
	function getnote()
	{
		return $this->note;
	}
	
	function getcomment()
	{
		return $this->comment;
	}
	
	
	public function setid_client($id_client)
	{
		$this->id_client=$id_client ;
	}
	public function setemail($email)
	{
		$this->email=$email ;
	}

	public function setnote($note)
	{
		$this->note=$note ;
	}
	public function setcomment($comment)
	{
		$this->comment=$comment ;
	}
	public function __construct($id_client,$email,$note,$comment)
	{
		$this->id_client=$id_client ;
		$this->email=$email;
		$this->note=$note ;
		$this->comment=$comment ;
	}
	
}
class Reclamation
{
	private $id_client ;
	private $idCommande;
	private $email ;
	private $subject ;
	private $message ;
	private $datee ;
	private $type ;
	function getid_client()
	{
		return $this->id_client;
	}
	function gettypee()
	{
		return $this->type;
	}
	function getdate()
	{
		return $this->datee;
	}
	function getemail()
	{
		return $this->email;
	}
	function getsubject()
	{
		return $this->subject;
	}
	function getmessage()
	{
		return $this->message;
	}
	function getidCommande()
	{
		return $this->idCommande;
	}
	public function setid_client($id_client)
	{
		$this->id_client=$id_client ;
	}
	public function settypee($type)
	{
		$this->type=$type ;
	}
	public function setdatee($datee)
	{
		$this->datee=$datee ;
	}
	public function setidCommande($idCommande)
	{
		$this->idCommande=$idCommande ;
	}
	public function setemail($email)
	{
		$this->email=$email ;
	}
	public function setsubject($subject)
	{
		$this->subject=$subject ;
	}
	public function setmessage($message)
	{
		$this->message=$message ;
	}
	public function __construct($id_client,$idCommande,$email,$subject,$message,$datee,$type)
	{
		$this->id_client=$id_client ;
		$this->idCommande=$idCommande;
		$this->email=$email ;
		$this->subject=$subject ;
		$this->message=$message ;
		$this->datee=$datee;
		$this->type=$type ;
	}
}


	?>