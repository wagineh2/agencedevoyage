<?PHP
/**
 *
 */
class partenaire
{
  private $id ;
  private $nom;
  private $adresse;
  private $numero;
  
  function __construct($id,$nom ,$adresse,$numero)
  {
  $this->id=$id;
  $this->nom=$nom;
  $this->adresse=$adresse;
  $this->numero=$numero;

  }
  function getid()
  {
    return $this->id;
  }
  function getnom ()
  {
    return $this->nom;
  }
  function getadresse()
  {
    return $this->adresse;
  }
  function getnumero()
  {
    return $this->numero;
  }
  
  function setid($id)
  {
    $this->id=$id;
  }
  function setnom ($nom)
  {
    $this->nom=$nom;

  }
  function setadresse($adresse)
  {
    $this->adresse=$adresse;

  }
  function setnumero($numero)
  {
    $this->numero=$numero;

  }
  
 
}
?>
