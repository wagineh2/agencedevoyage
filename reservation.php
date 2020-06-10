<?PHP
class offres
{
    public $photo;
    public $nb;
    public $destination;
    function __construct($photo,$nb,$destination)
    {   $this->photo = $photo; 
        $this->nb = $nb;
		$this->destination = $destination;
    }
    // getter 
    function getphoto()
    {
        return $this->photo;
    }
    function getnb()
    {
        return $this->nb;
    }
    function getdestination()
    {
        return $this->destination;
    }
    // setter 
     function setphoto($photo)
    {
        return $this->photo= $photo;
    }
    function nb($nb)
    {
        return $this->nb= $nb;
    }
    function setdestination($destination)
    {
        return $this->destination= $destination;
    }
}
  ?>
