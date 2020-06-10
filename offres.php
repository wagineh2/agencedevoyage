<?PHP
class offres
{
    public $nom_offre;
    public $nom_sponsor;
    public $destination;
    function __construct($nom_offre,$nom_sponsor,$destination)
    {   $this->nom_offre = $nom_offre; 
        $this->nom_sponsor = $nom_sponsor;
		$this->destination = $destination;
    }
    // getter 
    function getnom_offre()
    {
        return $this->nom_offre;
    }
    function getnom_sponsor()
    {
        return $this->nom_sponsor;
    }
    function getdestination()
    {
        return $this->destination;
    }
    // setter 
     function setnom_offre($nom_offre)
    {
        return $this->nom_offre= $nom_offre;
    }
    function setnom_sponsor($nom_sponsor)
    {
        return $this->nom_sponsor= $nom_sponsor;
    }
    function setdestination($destination)
    {
        return $this->destination= $destination;
    }
}
  ?>
