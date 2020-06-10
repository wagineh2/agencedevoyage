<?PHP
class sponsor
{
    public $id;
    public $nom_sponsor;
    public $tel;
    public $logo;

    
 	public function getid()
    {
        return $this->id;
    }
	function getnom_sponsor()
    {
        return $this->nom_sponsor;
    }
    function gettel()
    {
        return $this->tel;
    }
  
    function getlogo()
    {
        return $this->logo;
    }

   
  
    // setter 
     function setid($id)
    {
        return $this->id= $id;
    }
	function setnom_sponsor($nom_sponsor)
    {
        return $this->nom_sponsor= $nom_sponsor;
    }
    function settel($tel)
    {
        return $this->tel= $tel;
    }
    function setlogo($logo)
    {
        return $this->logo =$logo;
    }
   
    function __construct($nom_sponsor,$tel,$logo)
    {   $this->nom_sponsor = $nom_sponsor; 
        $this->tel = $tel;
        $this->logo = $logo;
    }
    // getter 
   
 
}
  ?>
