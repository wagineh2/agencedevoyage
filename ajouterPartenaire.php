<?PHP
include "../../entities/partenaire.php";
include "../../core/partenaireC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['adresse']) and isset($_POST['numero']) )
{

    $id=$_POST['id'];
    $nom =$_POST['nom'];
    $adresse=$_POST['adresse'];
    $numero=$_POST['numero'];

    
    $partenairevar = new partenaire($id,$nom ,$adresse,$numero);
    $partenaireCvar= new partenaireC() ;
    $partenaireCvar->ajouterPartenaire($partenairevar);
    Var_dump($partenairevar);
    header('Location: contact.php');
}
    else{
        echo "verifier les champs";
    }

?>